<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\DealRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie/{id}", name="categorie")
     */
    public function showCategorie($id, CategorieRepository $cateRepo, DealRepository $dealRepo): Response
    {
        $categorie = $cateRepo->find($id);
        $deal = $dealRepo->findBy([
            'categorie' => $categorie
        ]);
        
        dump($deal);

        return $this->render('categorie/show-categorie.html.twig', [
            'controller_name' => 'CategorieController',
            'categorie' => $categorie,
            'deals' => $deal
        ]);
    }

    public function baseCategorie(CategorieRepository $cateRepo){

        $categorie = $cateRepo->findall();
        dump($categorie);
        return $this->render('base.html.twig', [
            'controller_name' => 'CategorieController',
            'categorie' => $categorie
            
        ]);
    }
}
