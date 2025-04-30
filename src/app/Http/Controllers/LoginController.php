<?php

namespace App\Http\Controllers;

use Illuminate\Http\LoginRequest;

class LoginController extends Controller
{
    public function login()
  {
    return view('/login');
  }
  
}
