<?php

namespace App\Controller\Security;

use App\Service\Mailer;
use App\Form\ProfileType;
use App\Service\UploaderHelper;
use App\Repository\UserRepository;
use App\Form\ForgottenPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class UserController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var TokenGeneratorInterface
     */
    private $tokenGenerator;

    public function __construct(EntityManagerInterface $manager, TokenGeneratorInterface $tokenGenerator)
    {
        $this->manager = $manager;
        $this->tokenGenerator = $tokenGenerator;
    }

    /**
     * Profile Action
     *
     * @Route("/profil", name="user")
     */
    public function index(): Response
    {
        return $this->render('security/profile.html.twig', [
            'controller_name' => 'UserController',
            'user' => $this->getUser()
        ]);
    }

    /**
     * @Route("/profile-edit", name="profile")
     * @IsGranted("ROLE_USER")
     * @param Request        $request
     * @param UploaderHelper $uploaderHelper
     *
     * @return Response
     */
    public function edit(Request $request, UploaderHelper $uploaderHelper): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form['profile_picture']->getData();
            if ($uploadedFile) {
                $newFilename = $uploaderHelper->uploadPicture($uploadedFile, 'profilePictures');
                $user->setProfilePicture($newFilename);
            }

            $this->manager->persist($user);
            $this->manager->flush();

            $this->addFlash('success', 'Votre compte a bien été modifié.');
        }
        return $this->render('security/profile.html.twig', [
            'controller_name' => 'AccountController',
            'user' => $this->getUser(),
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/update_password", name="update_password")
     * @IsGranted("ROLE_USER")
     * @param Request        $request
     * @param UserRepository $userRepository
     * @param Mailer         $mailer
     *
     * @return RedirectResponse|Response
     * @throws TransportExceptionInterface
     */
    public function updatePassword(Request $request, UserRepository $userRepository, Mailer $mailer)
    {
        $form = $this->createForm(ForgottenPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $user = $userRepository->findOneBy($data['email']);

            if (!$user) {
                $this->addFlash('error', 'Cette adresse e-mail est inconnue');
                return $this->redirectToRoute('login');
            }

            $token = $this->tokenGenerator->generateToken();

            try {
                $user->setResetToken($token);
                $this->manager->persist($user);
                $this->manager->flush();
            } catch (Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('login');
            }

            $mailer->sendMessage('noreply@snowtricks.com', $user->getEmail(), $user->getUsername(), 'Modifier votre mot de passe', 'email/update-password.html.twig.html.twig', [
                'user' => $user,
                'token' => $user->getResetToken()
            ]);

            $this->addFlash('success', 'Un email de modification du mot de passe vient de vous être envoyé.');

            return $this->redirectToRoute('profile');
        }

        return $this->render('security/update-password.html.twig.html.twig', [
            'controller_name' => 'AccountController',
            'form' => $form->createView(),
        ]);
    }
}
