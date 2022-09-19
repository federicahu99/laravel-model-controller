<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
