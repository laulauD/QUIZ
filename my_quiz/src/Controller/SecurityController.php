<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    #[Route('/inscription', name: 'inscription')]
    public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User;
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $manager->persist($user);
            $manager->flush();
            return $this->redirectToRoute('connexion');
        }
        return $this->render('security/index.html.twig', [
         'form' => $form->createView()
        ]);
    }

    #[Route('/connexion', name: 'connexion')]
    public function login(): Response
    {
        return $this->render('security/login.html.twig');
    }

    #[Route('/deconnexion', name: 'logout')]
    public function logout(){}
}


