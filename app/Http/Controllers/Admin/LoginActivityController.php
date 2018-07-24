<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Core\Models\LoginActivity;

class LoginActivityController extends Controller
{
    public function index()
    {
        return view('login-activity.index', [
            'activities' => (new LoginActivity)->where('user_id', '=', auth()->user()->id)->latest()->paginate(10)
        ]);
    }
}
