<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function onDelete()
    {
        $result=DB::table('students')->where('name','=','Dipak Barai')->delete();
        if($result == true){
            return "Delete Successfully!";
        }else{
            return "Not Delete";
        }
    }

    public function onDeletee()
    {
        $result=DB::table('students')->delete();
        if($result == true){
            return "Delete Successfully!";
        }else{
            return "Not Delete";
        }
    }

    public function onDeleteee()
    {
        $result=DB::table('students')->truncate();
        if($result == true){
            return "Delete Successfully!";
        }else{
            return "Not Delete";
        }
    }
}
