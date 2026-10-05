<?php

namespace Core\Middleware;

class Guest
{
    public function handle()
    {
        $user = $_SESSION['user'] ?? null;

        if (
            ! is_array($user)
            || ! isset($user['id'], $user['email'])
            || (int) $user['id'] < 1
        ) {
            if ($user) {
                logout();
            }

            return;
        }

        header('location: /');
        exit();
    }
}