<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/news", name="news")
     */
    public function news()
    {
      return $this->render('src/news.html.twig', [
        'controller_name' => 'HomeController',
      ]);
    }

    /**
     * @Route("/body", name="body")
     */
    public function body()
    {
      return $this->render('src/body.html.twig', [
        'controller_name' => 'HomeController',
      ]);
    }

    /**
     * @Route("/mouth", name="mouth")
     */
    public function mouth()
    {
      return $this->render('src/mouth.html.twig', [
        'controller_name' => 'HomeController',
      ]);
    }

    /**
     * @Route("/skin", name="skin")
     */
    public function skin()
    {
      return $this->render('src/skin.html.twig', [
        'controller_name' => 'HomeController',
      ]);
    }

    /**
     * @Route("/eyes", name="eyes")
     */
    public function eyes()
    {
      return $this->render('src/eyes.html.twig', [
        'controller_name' => 'HomeController',
      ]);
    }

    /**
     * @Route("/nails", name="nails")
     */
    public function nails()
    {
      return $this->render('src/nails.html.twig', [
        'controller_name' => 'HomeController',
      ]);
    }
}
