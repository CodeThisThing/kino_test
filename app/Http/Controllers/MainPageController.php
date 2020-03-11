<?php

namespace App\Http\Controllers;

use App\Films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainPageController extends Controller
{
    public function index (){

        $films=Films::all();

        return view('main_page',compact('films'));
    }
}
