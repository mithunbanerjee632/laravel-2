<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DeleteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/fileUp',[UploadController::class,'onFileUpload']);
//__sorasori Download kora__//
Route::get('/fileDownload',[DownloadController::class,'onFileDownload']);
//__Button er sahajje file download kora__//
Route::get('/fileDownload/{folderPath}/{filename}',[DownloadController::class,'onDownload']);
Route::get('/fileList',[DownloadController::class,'onSelectFileList']);
//__Delete__//

Route::get('/deleteFile',[DeleteController::class,'onDelete']);
