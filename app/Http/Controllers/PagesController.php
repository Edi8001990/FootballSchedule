<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome in football schedule app";
       return view('pages.index')->with('title', $title);
    }

    public function countryLeagues(){
        
       return view('pages.country-leagues.country-leagues-main');
    }
}
