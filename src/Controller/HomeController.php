<?php

namespace App\Controller;

use App\Form\ModifyProgressType;
use App\Form\NewProgressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\httpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProgressRepository;
use App\Entity\Progress;


class HomeController extends AbstractController
{

    #[Route('/', name: "home", methods: ['GET'])]
    public function home(ProgressRepository $repo)
    {
        $progress = $repo->findAll();
        return $this->render("pages/home.html.twig", ["progress" => $progress]);
    }

    #[Route('/new_progress', name: "new_progress")]
    public function newProgress(Request $request, ProgressRepository $repo)
    {
        $form = $this->createForm(NewProgressType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $progress = $form->getData();
            $repo->save($progress);
            return $this->redirectToRoute("home");
        }
        return $this->render("pages/new_progress.html.twig", ["form" => $form->createView()]);
    }

 
}

