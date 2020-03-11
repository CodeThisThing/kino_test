<?php

namespace App\Http\Controllers;

use App\FavoriteFilms;
use App\Films;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteFilmController extends Controller
{
    public function index()
    {
        $favorite_films=FavoriteFilms::all()->where('user_id','=',Auth::user()->id);
        $films=Films::all();

        return view('favorite',compact('films','favorite_films'));
    }

    public function addToFavorite()
    {
        if(isset($_POST['film_id'])) {
            DB::table('favorite_films')->insert(
                ['user_id' => Auth::user()->id, 'film_id' => $_POST['film_id']]
            );
        }

    }
}
