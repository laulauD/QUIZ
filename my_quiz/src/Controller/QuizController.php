<?php

namespace App\Controller;

use App\Entity\Score;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Quiz;
use App\Entity\Questions;
use App\Entity\Reponse;
use App\Entity\User;


class QuizController extends AbstractController
{
    #[Route('/quiz', name: 'quiz')]
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Quiz::class);
        $quizs = $repo->findAll();

        return $this->render('quiz/index.html.twig', [
            'controller_name' => 'QuizController',
            'quizs' => $quizs
        ]);
    }

  #[Route('/', name: 'home')]
     public function home(): Response
     {
         return $this->render('quiz/home.html.twig');
     }

    #[Route('/categories', name: 'categories')]
    public function categories(): Response
    {
        return $this->render('quiz/categories.html.twig');
    }

    #[Route('/classement', name: 'classement')]
    public function classement(): Response
    {
        return $this->render('quiz/classement.html.twig');
    }

    #[Route('/score', name: 'score')]
  #[Route('/myquiz/{id}', name: 'myquiz')]
      public function myquiz($id, Request $request, ReponseRepository $reponseRepository): Response
      {
        if ($request->isMethod('POST') ){
            $total = 0;
            foreach($request->request as $value){
                $reponse = $reponseRepository->getScore($value);
                $reponse = $reponse[0];

              if($reponse['reponse_expected'] === true){
                 $total ++;
              }
            }
            $user = $this->getUser();
            if ($user == NULL){
                $user = NULL;
            }else {
                $user = $this->getUser();
            }


            $score = new Score();
            $score->setJoueur($user);
            $score->setQuizId(intVal($id));
            $score->setScore($total);
            $score->setCreatedAt(new \DateTime("NOW"));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($score);
            $entityManager->flush();
            $repo = $this->getDoctrine()->getRepository(Quiz::class);
            $quiz = $repo->find($id);
            $scoreId = $score->getId();
            $re = $this->getDoctrine()->getRepository(Score::class);
            $scored = $re->findAll();
            return $this->render('quiz/score.html.twig', [
                'scored' => $re->findBy(['id' => $scoreId]),
                'quizInfos' => $quiz
            ]);
        }

        
        $repo = $this->getDoctrine()->getRepository(Quiz::class);
        $quiz = $repo->find($id);
        
        $questions = $this->getDoctrine()->getRepository(Questions::class);
        $questions = $questions->findBy(['id_quiz' => $id]);
       
        $reponse = $this->getDoctrine()->getRepository(Reponse::class);
        
        $toto = $this->getDoctrine()->getRepository(Questions::class);

        $i = 0;

        foreach($questions as $value){
            $questions[$i] = $reponse->findBy(["id_question" => $value]);
            shuffle($questions[$i]);
            $i++;
        }
       
        return $this->render('quiz/myquiz.html.twig', [
            'quizInfos' => $quiz,
            'test' => $toto->findBy(['id_quiz' => $id]),
            'questions' => $questions
        ]);
      }
}
