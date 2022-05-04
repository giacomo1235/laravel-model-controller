<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $mymovies = Movie::all();
        $data = [
            'movies' => $mymovies
        ]; 
        return view('index', $data);
    }
}
