<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function duck() {
        $duck = 'Sono una papera';
        return view('duck', compact('duck'));
    }

    public function list() {
        $movies = \App\Movie::all(['title', 'original_title', 'nationality', 'date', 'vote']);
        // $moviesTwo = \App\Movie::all();
        // $movies = Movie::where('title', 'il padrino')->get(['title','nationality']);

        // dd($moviesTwo);

        return view('list', compact('movies'));
    }
}
