<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function onUpdate()
    {
        $result=DB::table('students')->where('id',4)->update(['name'=>'Anup Barai','roll'=>'9','class'=>'Nine']);

        if($result == true){
            return "Updated Successfully";
        }else{
            return "Not Updated";
        }
    }
}
