<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemController extends Controller
{
       public function top()
  {
    return view('top');
  }

 

   public function  register()
  {
    return view(' register');
  }

  public function mypage()
  {
    return view('mypage');
  }


  public function login()
  {
    return view('login');
  }

  public function item_id()
  {
    return view('purchase/address/:item_id');
  }

 public function item_id1()
  {
    return view('purchase/:item_id');
  }


public function profile()
  {
    return view('/mypage/profile');
  }

 public function item()
  {
    return view('item');
  }

   public function sell()
  {
    return view('sell');
  }

   public function item_id2()
  {
    return view('item/:item_id');
  }
}
