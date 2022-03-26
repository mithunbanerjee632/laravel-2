<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicCurdController extends Controller
{
   public function onSelect()
   {
       $users = DB::select('select* from  students');
        $jsonstring=json_encode($users);
        $selectdata=json_decode($jsonstring);
       return view('select',['users'=>$selectdata]);
   }

   public function onInsert(Request $request)
   {
       $name = $request->input('name');
       $roll = $request->input('roll');
       $class= $request->input('class');
       $result = DB::insert('INSERT INTO `students`( `name`, `roll`, `class`) VALUES (?,?,?)',[$name,$roll,$class]);

       if($result == true){
           return 'Success';
       }else{
           return 'failed';
       }
   }

   public function onDelete(Request $request)
   {
       $id = $request->input('id');
       $result=DB::delete('DELETE FROM `students` WHERE `id`=?',[$id]);
       if($result == true){
           return 'Success';

       }else{
           return 'Delete Failed!';
       }

   }

   public function onUpdate(Request $request)
   {
    $myName = $request->input('name');
    $myRoll = $request->input('roll');
    $myClass= $request->input('class');
    $myId   = $request->input('id'); 

    $result = DB::update('UPDATE `students` SET `name`=?,`roll`=?,`class`=? WHERE `id`=?',[$myName,$myRoll,$myClass,$myId]);

    if($result==true){
        return "Success";
    }else{
        return "Update Failed!";
    }
    
    
    
    
    
    
    
    
   }
}
