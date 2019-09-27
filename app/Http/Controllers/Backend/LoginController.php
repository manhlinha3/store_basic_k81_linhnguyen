<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('backend.login');
    }

    public function postLogin(LoginRequest $request)
    {
        
    }

}
