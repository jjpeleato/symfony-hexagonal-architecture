<?php

declare(strict_types=1);

namespace App\HelloMom\Domain\Message;

/**
 * Service for creating hello messages.
 * This service implements the HelloServiceInterface to provide a specific implementation
 * for generating a hello message.
 */
class HelloService implements HelloServiceInterface
{
    /**
     * Creates a hello message.
     *
     * @return string the generated hello message
     */
    public function createMessage(): string
    {
        return 'Hello Mom!';
    }
}
