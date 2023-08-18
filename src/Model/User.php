<?php

namespace App\Model;

readonly class User
{
    public function __construct(
        private string $email,
        private string $name
    )
    {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }
}