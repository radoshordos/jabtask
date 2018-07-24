<?php

namespace App\Listeners;

use Core\Models\LoginActivity;
use Illuminate\Auth\Events\Logout;

class LogSuccessfulLogout
{
    public function handle(Logout $event)
    {
        try {
            (new LoginActivity)->create([
                'message'    => 'Úspěšné odhlášení',
                'user_id'    => $event->user->id,
                'user_agent' => \Illuminate\Support\Facades\Request::header('User-Agent'),
                'ip_address' => \Illuminate\Support\Facades\Request::ip()
            ]);
        } catch (\Exception $e) {
            \Log::error($e);
        }
    }
}