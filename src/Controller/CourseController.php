<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends Controller
{
    /**
     * @Route("/course", name="course")
     */
    public function index()
    {
        return $this->render('course/index.html.twig', [
            'controller_name' => 'CourseController',
        ]);
    }
}
