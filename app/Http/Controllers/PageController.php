<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Make Function
    public function home(){
        return view('home');
    }

    public function deletemahasiswa($nim){
        return view('deletemahasiswa', compact('nim'));
    }
    
    public function editmahasiswa($nim){
        return view('editmahasiswa', compact('nim'));
    }

    public function tambahmahasiswa(){
        return view('formmahasiswa');
    }

    public function prosesmahasiswa(Request $request){
        $nim = $request->nim;
        $nama = $request->nama;
        $gender = $request->gender;
        $prodi = $request->prodi;
        $pakar = $request->pakar;
        return view('home', compact('nim','nama','gender','prodi','pakar'));
    }
}