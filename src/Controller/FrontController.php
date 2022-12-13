<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class FrontController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/", "index_page")
     */
    public function index() {
        return $this->render('index.html.twig');
    }

}