<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{
    private string $name = 'unknown';


    /**
     * @Route("/learning", name="learning")
     */
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }

    /**
     * @Route("/aboutme", name="aboutme")
     */

    public function aboutMe()
    {
        return $this->render('learning/aboutme.html.twig');
    }

    /**
     * @Route("/", name="showMyName")
     */

    public function showMyName()
    {
        if (isset($_POST['name'])) {
            $this->name = $_POST['name'];
            return $this->render('learning/changeMyName.html.twig');
        } else {
            return $this->render('learning/showMyName.html.twig', [
                'name' => $this->name
            ]);
        }
    }

    /**
     * @Route("/changeMyName", name="changeMyName")
     */

    public function changeMyName()
    {
        return $this->render('learning/changeMyName.html.twig');
    }
}

