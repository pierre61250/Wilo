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
            'error' => null,
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

        $response = new Response();
        $response->headers->clearCookie('id');
        $response->send();
        $response->headers->clearCookie('result');
        $response->send();
        $response->headers->clearCookie('mise');
        $response->send();

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
                'result' => $result,
                'rewards' => $mise,
            ]);
        } else if ($result == "Gagné") {
            $nbJetons = $user->getJetons();
            $user->setJetons($nbJetons+(($mise*2)-(($mise*2)*20/100)));

            $entityManager->flush();

            return $this->render('jeux/resultat.html.twig', [
                'controller_name' => 'JeuxController',
                'result' => $result,
                'rewards' => (($mise*2)-(($mise*2)*20/100)),
            ]);
        } else if ($result == "Perdu") {
            return $this->render('jeux/resultat.html.twig', [
                'controller_name' => 'JeuxController',
                'result' => $result,
                'rewards' => -($mise),
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
        if ($nbJetons-$mise < 0) {
            return $this->render('jeux/index.html.twig', [
                'controller_name' => 'JeuxController',
                'error' => "Vous n'avez pas assez de jetons pour participer !",
            ]);
        }
        $user->setJetons($nbJetons-$mise);

        $entityManager->flush();

        return $this->render('jeux/pfc.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }

    /**
     * @Route("/morpion",name="morpion")
     */
    public function morpion(Request $request): Response
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
        if ($nbJetons-$mise < 0) {
            return $this->render('jeux/index.html.twig', [
                'controller_name' => 'JeuxController',
                'error' => "Vous n'avez pas assez de jetons pour participer !",
            ]);
        }
        $user->setJetons($nbJetons-$mise);

        $entityManager->flush();

        return $this->render('jeux/morpion.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }

    /**
     * @Route("/nbMystere",name="nbMystere")
     */
    public function nbMystere(Request $request): Response
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
        if ($nbJetons-$mise < 0) {
            return $this->render('jeux/index.html.twig', [
                'controller_name' => 'JeuxController',
                'error' => "Vous n'avez pas assez de jetons pour participer !",
            ]);
        }
        $user->setJetons($nbJetons-$mise);

        $entityManager->flush();

        return $this->render('jeux/nbMystere.html.twig', [
            'controller_name' => 'JeuxController',
        ]);
    }
}
