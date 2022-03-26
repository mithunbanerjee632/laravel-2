<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    public function selectUnique()
    {
        $result = DB::table('students')->distinct()->get();
        return $result;
    }

    public function singleColumnSelect()
    {
        $result = DB::table('students')->select('name')->get();
        return $result;
    }

    public function multipleColumnSelect()
    {
        $result = DB::table('students')->select('name','class','roll')->get();
        return $result;
    }


}
