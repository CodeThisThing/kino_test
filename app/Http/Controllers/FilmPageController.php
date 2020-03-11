<?php

namespace App\Http\Controllers;

use App\Films;
use Illuminate\Http\Request;

class FilmPageController extends Controller
{
    public function index($film_id,Request $request){
        $film=Films::all()->where('id','=',$film_id)->first();

        return view('film_page')->with(['film'=>$film]);
    }
}
