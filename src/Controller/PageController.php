<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page_first")
     */
    public function index(): Response
    {
        return $this->redirectToRoute("app_login");
    }
    /**
     * @Route("/profile/home", name="home")
     */
    public function home()
    {
        return $this->render("page/home.html.twig");
    }

    /**
     * @Route("/attente_mail", name="attente_mail")
     */
    public function attente_mail()
    {
        return $this->render("page/attente.html.twig");
    }

}
