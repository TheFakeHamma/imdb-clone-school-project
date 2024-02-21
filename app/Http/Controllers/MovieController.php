<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Content::where('type', 'movie')->get(); // Fetch all movies
        $latestMovie = Content::where('type', 'movie')->latest('release_date')->first(); // Fetch the latest movie

        return view('index', compact('movies', 'latestMovie'));
    }
}
