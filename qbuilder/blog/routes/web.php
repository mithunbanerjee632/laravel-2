<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\AggregatesController;
use App\Http\Controllers\SelectController;
use App\Http\Controllers\MergeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
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
    return view('welcome');
});

Route::get('/',[RetriveController::class,'specificData']);
Route::get('/avgRow',[AggregatesController::class,'avgRow']);
Route::get('/multipleColumnSelect',[SelectController::class,'multipleColumnSelect']);
Route::get('/mergeData',[MergeController::class,'mergeData']);
Route::get('/rightjoindata',[JoinController::class,'rightJoinData']);
Route::get('/insert',[InsertController::class,'insertData']);
Route::get('/delete',[DeleteController::class,'onDelete']);
Route::get('/update',[UpdateController::class,'onUpdate']);