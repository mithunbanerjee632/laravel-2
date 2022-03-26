<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    //__sorasori Download kora__//
//    function onFileDownload(){
//        //$results = Storage::download('images/3QDzlMfZ4DsO0xZ.mp4','vide.mp4');
//        //return $results;
//    }

//__Button er sahajje file download kora__//

     function onDownload($folderPath,$filename){
         return Storage::download($folderPath."/"."$filename");
     }


      function  onSelectFileList(){
          $result = DB::table('file')->get();
          return $result;
      }
}
