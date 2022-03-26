<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    //  public function insertData()
    //  {
    //      $result=DB::table('students')->insert(['name'=>'Ashish Barai','roll'=>'11','class'=>'Ten']);
    //      if($result==true){
    //       return "Inserted Successfully";
    //     }else{
    //         return "Not Inserted!";
    //      }
    //  }


    public function insertData()
    {
        $result=DB::table('students')->insert(

            [
                ['name'=>'Bipul Barai','roll'=>'12','class'=>'Eight'],
                ['name'=>'Dipak Barai','roll'=>'13','class'=>'Eight'],
                ['name'=>'Partho Banerjee','roll'=>'06','class'=>'Eleven']


            ]
          
        
        );


        if($result==true){
          return "Inserted Successfully";
        }else{
            return "Not Inserted!";
        }
    }
}
