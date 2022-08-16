<?php

class UserProvider {
    private array $accounts = [
        'admin' => '123',
    ];

    public function getByUsernameAndPassword(string $username, string $pass): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $pass) {
            return new User($username);
        }

        return null;
    }
}