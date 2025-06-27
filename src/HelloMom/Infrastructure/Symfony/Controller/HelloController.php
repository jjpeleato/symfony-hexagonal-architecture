<?php

declare(strict_types=1);

namespace App\HelloMom\Infrastructure\Symfony\Controller;

use App\HelloMom\Application\SayHello\SayHelloUseCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for handling hello requests.
 * This controller uses the SayHelloUseCase to generate a hello message
 * and renders it in a Twig template.
 */
class HelloController extends AbstractController
{
    #[Route('/hello', name: 'hello', methods: ['GET'])]
    public function helloAction(SayHelloUseCase $useCase): Response
    {
        $message = $useCase->execute();

        return $this->render('hello.html.twig', [
            'message' => $message,
        ]);
    }
}
