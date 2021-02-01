<?php

namespace App\Controller;

use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil_user")
     */
    public function index(DealRepository $dealRepository): Response
    {
        $user = $this->getUser();

        $dealUser = $dealRepository->findBy(['user'=> $user->getId()]);

        dump($dealUser);
       
 
        return $this->render('profil/index.html.twig', [
            'controller_name' => 'ProfilController',
            'user' => $user,
            'dealUser' => $dealUser
        ]);
    }
}
