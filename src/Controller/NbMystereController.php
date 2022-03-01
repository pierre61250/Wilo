<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class NbMystereController extends AbstractController
{
    #[Route('/nb-mystere', name: 'nb_mystere')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();

        $user = $this->getUser();
        if (null == $user)
            return $this->redirectToRoute('app_register');
        $user->setJetons($user->getJetons() - 100);

        $em->flush();

        return $this->render('nb_mystere/index.html.twig', []);
    }

    #[Route('/nb-mystere/victory', name: 'nb_mystere_victory')]
    public function victory(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        
        $user = $this->getUser();
        $user->setJetons($user->getJetons() + 200);

        $em->flush();
        
        return $this->json(['user'=>$user],200);
    }
}
