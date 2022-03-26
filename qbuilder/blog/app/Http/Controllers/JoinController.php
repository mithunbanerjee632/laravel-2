<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function leftJoinData()
    {
        $result=DB::table('students') 
                ->leftjoin('exam_marks','students.roll','=','exam_marks.roll')
                ->get();

         return $result;       
    }

    public function rightJoinData()
    {
        $result=DB::table('students')
               ->rightjoin('exam_marks','students.roll','=','exam_marks.roll')
               ->get();
        return $result;       
    }
}
