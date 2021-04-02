<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuxController extends AbstractController
{
    /**
     * @Route("/jeux", name="jeux")
     */
    public function index(): Response
    {
        return $this->render('jeux/index.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }

    /**
     * @Route("/resultat", name="resultat")
     */
    public function result(Request $request): Response
    {
        $user = $this->getUser();

        echo($user);

        return $this->render('jeux/resultat.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }

    /**
     * @Route("/pfc",name="pfc")
     */
    public function pfc(): Response
    {
        return $this->render('jeux/pfc.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }
}
