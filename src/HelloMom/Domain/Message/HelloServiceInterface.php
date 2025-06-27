<?php

declare(strict_types=1);

namespace App\HelloMom\Domain\Message;

/**
 * Interface for creating hello messages.
 * This interface defines the contract for services that generate hello messages.
 */
interface HelloServiceInterface
{
    /**
     * Creates a hello message.
     *
     * @return string the generated hello message
     */
    public function createMessage(): string;
}
