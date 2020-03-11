<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    function formulir(){
        return view('formulir');
    }

    function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : " .$nama. "\n Alamat : " .$alamat;
    }
}
