<?php

namespace App\Http\Controllers\Auth;
use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return  Inertia::render('Auth/Login');
    }
}
