<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/todo', name: 'todo')]
class TodoController extends AbstractController
{
    #[Route(
        '/{title}/{contentsy}',
        name: 'app_todo',
        defaults: ['title' => 'titre', 'content' => 'contenu']
    )]
    public function index(Request $request, $title, $content): Response
    {
        return new Response("<h1>$title : $content </h1>");
    }
}
