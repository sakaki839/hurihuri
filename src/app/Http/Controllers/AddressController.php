<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
     public function item_id()
  {
    return view('purchase/address/:item_id');
  }
}
