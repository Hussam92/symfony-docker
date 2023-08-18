<?php

namespace App\Controller;

use App\Model\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route(name: 'articles', path: '/articles', methods: ['GET'])]
    public function listArticles(): Response
    {
        return new Response('Welcome to Latte and Code ');
    }

    #[Route(name: 'articles_by_user', path: '/articles/{user}', methods: ['GET'])]
    public function listArticlesByUser(User $user)
    {
        return new Response("All articles by {$user->getName()}");
    }
}
