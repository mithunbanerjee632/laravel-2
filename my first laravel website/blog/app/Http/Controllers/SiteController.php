<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function ShowHome()
    {
        return view('home');
    }

    public function ShowAbout()
    {
        return view('about');
    }

    public function ShowService()
    {
        return view('service');
    }

    public function ShowPortfolio()
    {
        return view('portfolio');
    }
}
