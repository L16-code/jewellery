<?php

namespace App\Controllers;
use App\Models\UserModel;

class Logout extends BaseController
{
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        return redirect()->route('pages-login');
    }
}