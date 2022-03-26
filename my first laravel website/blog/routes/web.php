<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/',[SiteController::class,'ShowHome']);
Route::get('/about',[SiteController::class,'ShowAbout']);
Route::get('/service',[SiteController::class,'ShowService']);
Route::get('/portfolio',[SiteController::class,'ShowPortfolio']);
