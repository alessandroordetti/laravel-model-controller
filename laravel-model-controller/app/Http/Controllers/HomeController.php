<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mostraFilm(){
        $data = [
            "movie" => new Movie(),
        ];

        return view('movies.index', $data);
    }
}
