<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetriveController extends Controller
{
    public function selectAllRows()
    {
        $result=DB::table('students')->get();
        return $result;
    }

    public function selectOneRows()
    {
        $result = DB::table('students')->where('name','Mithun banerjee')->first();
        return json_encode($result);
    }

    public function findRows()
    {
        $result = DB::table('students')->find(2);
        return json_encode($result);
    }

    public function selectOneColumn()
    {
        $result = DB::table('students')->pluck('name');
        return json_encode($result);
    }

    public function selectMultipleColumn()
    {
        $result = DB::table('students')->pluck('name','class');
        return json_encode($result);
    }

    public function specificData()
    {
        $result = DB::table('students')->where('name','Anup')->value('class');
        return json_encode($result);
    }
}
