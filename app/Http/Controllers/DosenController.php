<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        //return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
        //return view('biodata');
        $nama = "Diki Alfarabi Hadi";
    	//return view('biodata',['nama' => $nama]);
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
    }
}
