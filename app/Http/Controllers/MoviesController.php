<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public  function index()
    {
        $film = Movie::all();
        return view('index', ["film" => $film]);
    }
}
