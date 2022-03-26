<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataGetController extends Controller
{   //session er jonno
//    function DataGet(Request $request){
//        return $request->session()->get('namekey');
//    }

    function DataGet(Request $request){
        return Cookie::get('namekey');
    }



}
