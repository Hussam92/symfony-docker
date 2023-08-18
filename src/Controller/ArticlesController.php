<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route(name: 'articles', path: '/articles', methods: ['GET'])]
    public function listArticles(): Response
    {
        return new Response('This controller shows latest articles');
    }
}
