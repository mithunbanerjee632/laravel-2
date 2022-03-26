<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataSaveController extends Controller
{
    //session er jonno

//    function DataSave(Request $request){
//        $request->session()->put('namekey','Mithun Banerjee');
//    }

//cookie er jonno

    function DataSave(Request $request){
        Cookie::queue('namekey','Mithun Banerjee',40000);
    }
}
