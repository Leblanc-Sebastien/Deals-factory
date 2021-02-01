<?php

namespace App\Controller;

use App\Entity\Deal;
use App\Entity\User;
use App\Entity\Comments;
use App\Repository\CommentsRepository;
use App\Repository\DealRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DealController extends AbstractController
{
    /**
     * @Route("/", name="deal_index")
     */
    public function index(DealRepository $dealRepo, Request $request): Response
    {
        $pageLimit = 5;

        // recuperation du n° de page
        $page = (int)$request->query->get("page", 1);

        //recuperation du nombre de deal au total
        $countDeals = $dealRepo->getTotalDeals();
        
        //recuperation du nombre de page necessaire
        $countPage = (int)ceil($countDeals / $pageLimit);

        //recuperation du nombre de deal necessaire pour la page demandée
        $deals = $dealRepo->getPaginatedAnnonces($page, $pageLimit);

        return $this->render('deal/index.html.twig', [
            'controller_name' => 'DealController',
            'deals' => $deals,
            'pageLimit' => $pageLimit,
            '$countDeals' => $countDeals,
            'page' => $page,
            'countPage' => $countPage
        ]);
    }

    /**
     * @Route("/deal/{id}", name="deal_show")
     */
    public function show($id, DealRepository $dealRepository, CommentsRepository $commentsRepository ,Request $request, EntityManagerInterface $entityManager){
        
        $user = $this->getUser();   
        $deal = $dealRepository->find($id);
        $comment = new Comments();
        
        
        /*recuperation des commentaires pour l'affichage*/
        $pageLimit = 4;
        $page = (int)$request->query->get('page', 1);
        
        $countComments = $commentsRepository->getTotalComments($deal);
        $countPage = (int)ceil($countComments / $pageLimit);

        $comments = $commentsRepository->getPaginatedComments($page, $pageLimit, $deal);     
        dump($countPage);
        /****/ 

        $form = $this->createFormBuilder($comment)
            ->add('title', TextType::class, ['label' => 'Titre du commentaire'])
            ->add('content', TextareaType::class, ['label' => 'Votre commentaire'])
            ->add('save', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $comment->setCreatedAt(new \DateTime());
            $comment->setUser($user);
            $comment->setDeal($deal);
            $entityManager->persist($comment);
            $entityManager->flush();       
            
            return $this->redirectToRoute('deal_show', ['id' => $id]);
        }

        return $this->render('deal/dealShow.html.twig', [
            'deal' => $deal,
            'comments' => $comments,
            'countPage' => $countPage,
            'page' => $page,
            'form' => $form->createView()
        ]);
    }
}
