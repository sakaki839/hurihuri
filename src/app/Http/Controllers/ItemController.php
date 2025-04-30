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

 

  

  public function mypage()
  {
    return view('mypage');
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
