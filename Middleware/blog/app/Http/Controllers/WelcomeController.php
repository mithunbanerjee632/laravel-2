<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
//    function __construct(){
//        $this->middleware('demo');
//    }


   function  welcomePage(){

       return view('welcome');
   }
}
