<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users;

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
        $id = $request->cookies->get('id');
        $result = $request->cookies->get('result');
        $mise = $request->cookies->get('mise');

        if ($id == null) {
            return $this->redirectToRoute('home');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }
        
        if ($result == "Egalité") {
            $nbJetons = $user->getJetons();
            $user->setJetons($nbJetons+$mise);

            $entityManager->flush();

            return $this->render('jeux/resultat.html.twig', [
                'controller_name' => 'JeuxController',
            ]);
        } else if ($result == "Gagné") {
            $nbJetons = $user->getJetons();
            $user->setJetons($nbJetons+(($mise*2)-(($mise*2)*20/100)));

            $entityManager->flush();

            return $this->render('jeux/resultat.html.twig', [
                'controller_name' => 'JeuxController',
            ]);
        } else if ($result == "Perdu") {
            return $this->render('jeux/resultat.html.twig', [
                'controller_name' => 'JeuxController',
            ]);
        }

    }

    /**
     * @Route("/pfc",name="pfc")
     */
    public function pfc(Request $request): Response
    {
        $id = $request->cookies->get('id');
        $mise = $request->cookies->get('mise');

        if ($id == null) {
            return $this->redirectToRoute('home');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        $nbJetons = $user->getJetons();
        $user->setJetons($nbJetons-$mise);

        $entityManager->flush();

        return $this->render('jeux/pfc.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }
}
