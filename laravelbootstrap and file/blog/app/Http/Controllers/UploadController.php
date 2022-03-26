<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    function onFileUpload(Request $request){
    //$result = $request->FileKey->store('images');
        $path = $request->file('FileKey')->store('images');
        $result=DB::table('file')->insert(['file_path'=>$path]);

        if($result == true){
            return 1;
        }else{
            return 0;
        }
    }
}
