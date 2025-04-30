<?php

namespace App\Http\Controllers;

use Illuminate\Http\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function register()
  {
    return view('/register');
  }
}
