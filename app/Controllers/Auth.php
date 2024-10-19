<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Load the view for login
        return view('auth/login');
    }

    public function register()
    {
        // Load the view for login
        return view('auth/register');
    }
}
