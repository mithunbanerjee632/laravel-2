<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    function onDelete(){
        //single file
        Storage::delete('images/bLkTaDdHTZoXb5gkQEfDbOItjgGQVuDYbvzLtzLE.mp4');
        //multiple file
        Storage::delete(['images/H7IM2OPHvv1dDvwZJ3RUdQfKGv0RMdaHiDybCUsQ.jpg','images/afaz9mQyH5j2yhgTdSFfccQPdjXRklruqm1AsxUo.ppt']);
    }
}
