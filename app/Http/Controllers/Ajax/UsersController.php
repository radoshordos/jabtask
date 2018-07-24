<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getUsers()
    {
        return \Response::json((new \App\User())->all());
    }
}