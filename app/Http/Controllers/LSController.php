<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class LSController extends Controller
{
    function home() {
        $songs = Song::all();

        return view('home', compact('songs'));
    }

    function contact() {
        return view('contact');
    }

    function add() {
        return view('add');
    }
    
    function update() {
        $songs = Song::all();
        return view('update', compact('songs'));
    }
}
