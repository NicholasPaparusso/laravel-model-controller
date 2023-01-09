<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function movieDetail($id)
    {
        $movie = Movie::find($id);
        if(is_null($movie)){
            abort(404);
        }
        return view('movie-detail', compact('movie'));
    }
}
