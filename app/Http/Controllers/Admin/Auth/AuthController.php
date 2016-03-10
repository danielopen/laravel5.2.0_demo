<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function showLogin()
    {
        return $this->view('admin.auth.login');
    }

}
