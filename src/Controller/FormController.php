<?php

namespace App\Controller;

use App\Entity\Deal;
use App\Entity\User;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Name;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class FormController extends AbstractController
{
    /**
     * @Route("/add-user", name="add-user")
     */
    public function addUser(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User;
        
        $form = $this->createFormBuilder($user)
            ->add('pseudo', TextType::class, ['label' => "Votre pseudo"])
            ->add('email', EmailType::class, ['label' => "Votre Email"])
            ->add('password', PasswordType::class, ['label' => "Votre Password"])
            ->add('confirmPassword', PasswordType::class, ['label' => "Confirmer votre password"])
            ->add('save', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setCreatedAt(new \DateTime());

            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('login-user');
        }

       
        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/login-user", name="login-user")
     */
    public function loginUser(AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        return $this->render('form/loginForm.html.twig', [
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout-user", name="logout-user")
     */
    public function logoutUser(){

    }

    /** 
     * @Route("/add-deal", name="add-deal")
     */
    public function addDeal(Request $request, CategorieRepository $cateRepo, EntityManagerInterface $entityManager){

        function percentage($newP, $oldP){

            return 100 - (($newP * 100)/$oldP);
        }

        $user = $this->getUser();       
        $deal = new Deal();
           
        $form = $this->createFormBuilder($deal)
            ->add('link', UrlType::class, ['label' => 'Liens de votre deal'])
            ->add('newPrice', MoneyType::class, ['label' => 'Nouveau prix'])
            ->add('oldPrice', MoneyType::class, ['label' => 'Ancien prix'])
            ->add('shippingCost', MoneyType::class, ['label' => 'Frais de livraison'])
            ->add('title', TextType::class, ['label' => 'Titre de votre deal'])
            ->add('description', TextareaType::class, ['label' => 'Descrition de votre deal'])
            ->add('startDate', DateType::class, ['label' => 'Date de début'])
            ->add('endDate', DateType::class, ['label' => 'Date de fin'])
            ->add('categorie', EntityType::class, [
                'class' => 'App\Entity\Categorie',
                'choice_label' => 'name'
            ])
            ->add('save', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();


        //dump($request->request->all()['form']['newPrice']);
        $form->handleRequest($request);
        

        if($form->isSubmitted() && $form->isValid()){
            
            $deal->setCreatedAt(new \Datetime);
            $deal->setUser($user);  
            $deal->setPercent(percentage($request->request->all()['form']['newPrice'],$request->request->all()['form']['oldPrice'] ));         
            $entityManager->persist($deal);
            $entityManager->flush();
            return $this->redirectToRoute('deal_index');

        }

        return $this->render('form/dealForm.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
