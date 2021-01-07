<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;

class TrickController extends AbstractController
{
    /**
     * Presentation all tricks
     * @Route("/tricks", name="app_tricks")
     */
    public function index(): Response
    {
        return $this->render('trick/tricks.html.twig', [
            'controller_name' => 'TrickController',
        ]);
    }

    /**
     * Presentation one trick
     * @Route("/trick", name="app_trick")
     */
    public function presentation(): Response
    {
        return $this->render('trick/presentation.html.twig', [
            'controller_name' => 'TrickController',
        ]);
    }

    /**
     * creation page
     *
     * @Route("/trick/creation", name="app_creation_trick")
     */
    public function creationTrick(): Response
    {
        return $this->render('trick/creation.html.twig', [
            'controller_name' => 'TrickController',
        ]);
    }
}
