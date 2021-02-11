<?php

namespace App\Controller;

use App\Repository\TrickRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param TrickRepository $trickRepository
     *
     * @return Response
     */
    public function index(TrickRepository $trickRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'HomeController',
            'tricks'          => $trickRepository->findByOrderAndLimit(),
            'tricks_more'     => $trickRepository->findForReadMore()
        ]);
    }
}
