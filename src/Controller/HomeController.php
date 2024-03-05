<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\httpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProgressRepository;
use App\Entity\Progress;


class HomeController extends AbstractController {

    #[Route('/', name:"home", methods: ['GET'])]
    public function home(ProgressRepository $repo)
    {
        $progress = $repo->findAllData();

       return $this->render("pages/home.html.twig", ["progress" => $progress]);
    }
}