<?php

declare(strict_types=1);

namespace App\HelloMom\Application\SayHello;

use App\HelloMom\Domain\Message\HelloServiceInterface;

/**
 * Use case for saying hello.
 * This use case encapsulates the logic for creating a hello message.
 * It interacts with the HelloServiceInterface to generate the message.
 */
class SayHelloUseCase
{
    /**
     * @var HelloServiceInterface the service used to create hello messages
     */
    private HelloServiceInterface $service;

    /**
     * Constructor for SayHelloUseCase.
     *
     * @param HelloServiceInterface $service the service used to create hello messages
     */
    public function __construct(HelloServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Executes the use case to create a hello message.
     *
     * @return string the generated hello message
     */
    public function execute(): string
    {
        return $this->service->createMessage();
    }
}
