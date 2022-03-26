<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataClearController extends Controller
{  //session ser jonno
//    function DataClear(Request $request){
//         $request->session()->forget('namekey');
//    }

    function DataClear(Request $request){
        return Cookie::forget('namekey');
    }
}
