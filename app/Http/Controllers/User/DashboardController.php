<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        // $featuredMovies = Movie::whereIsFeatured(true)->get();
        $featuredMovies = Movie::where('is_featured', true)->get();
        $movies = Movie::all();


        return inertia('User/Dashboard/Index', [
            'featuredMovies' => $featuredMovies,
            'movies' => $movies
        ]);
        // return Inertia::render('User/Dashboard/Index');
    }
}
