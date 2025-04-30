<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
     

 public function item_id1()
  {
    return view('purchase/:item_id');
  }

}
