<?php

namespace App\Http\Controllers;

use Illuminate\Http\ProfileRequest;

class ProfileController extends Controller
{
    public function profile()
  {
    return view('/mypage/profile');
  }
}
