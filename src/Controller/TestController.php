<?php

namespace App\Controller;


use App\Service\DateService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/task_2')]
    public function date(DateService $dateService): Response
    {
        return new Response($dateService->getDate());
    }

}