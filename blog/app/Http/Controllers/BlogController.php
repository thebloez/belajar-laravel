<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function home(){
        return view('home');
    }

    function tentang(){
        return view('tentang');
    }

    function kontak(){
        return view('kontak');
    }
}
