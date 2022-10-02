<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function index(Request $request)
   { 
    echo "<pre>";
    print_r($request ->all());
}

  public function dashboard(){
   $customer = Customer::all();
   return view('db');}
}