<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $nama = "Ryan Safary Hidayat";
        $pelajaran = ["Algoritma & Pemograman", "Agama", "Pemograman Web"];
        return view('biodata',['nama' => $nama, 'matkul' => $pelajaran]);
    }

    public function methodLain(){
        return "Hallo from methodLain";
    }
}
