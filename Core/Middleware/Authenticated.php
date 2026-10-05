<?php

namespace Core\Middleware;

class Authenticated
{
    public function handle()
    {
        $user = $_SESSION['user'] ?? null;

        if (
            ! is_array($user)
            || ! isset($user['id'], $user['email'])
            || (int) $user['id'] < 1
        ) {
            logout();
            header('location: /');
            exit();
        }
    }
}
