<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class PageController
 * @package App\Controller
 */
class PageController extends AbstractController
{
    /**
     * Root page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('page/index.twig', [
           'title' => 'Root page'
        ]);
    }

    /**
     * Home page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home()
    {
        return $this->render('page/home.twig', [
            'title' => 'Root page'
        ]);
    }
}