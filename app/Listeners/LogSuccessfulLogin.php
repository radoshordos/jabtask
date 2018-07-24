<?php

namespace App\Listeners;

use Core\Models\LoginActivity;
use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    public function handle(Login $event)
    {
        try {
            (new LoginActivity)->create([
                'message'    => 'Úspěšné přihlášení',
                'user_id'    => $event->user->id,
                'user_agent' => \Illuminate\Support\Facades\Request::header('User-Agent'),
                'ip_address' => \Illuminate\Support\Facades\Request::ip()
            ]);
        } catch (\Exception $e) {
            \Log::error($e);
        }
    }
}