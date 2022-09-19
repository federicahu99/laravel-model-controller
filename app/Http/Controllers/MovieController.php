<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index() 
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movies = Movie::find($id);

        if(!is_numeric($id) || $id < 0 || $id >= count($movies)) {
           abort(404);
        }
        
        $movie = $movies[$id];
        return view('movies.show', compact('movie'));
    }
}
