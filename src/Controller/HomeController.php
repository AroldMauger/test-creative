<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\httpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends AbstractController {

    #[Route('/', name:"home", methods: ['GET'])]
    public function home( )
    {
       return $this->render("pages/home.html.twig");
    }
}