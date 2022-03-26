<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScoreUpdateController;

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
    return view('Scoreboard');
});
Route::get('/update', function () {
    return view('ScoreUpdate');
});

Route::post('/pushScore',[ScoreUpdateController::class,'pushScoreValue']);

