<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $movies = \App\Movie::all(['title']);
        $moviesTwo = \App\Movie::all();

        // dd($moviesTwo);

        return view('list', compact('movies'));
    }
}
