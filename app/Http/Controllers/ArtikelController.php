<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        $data_artikel=Artikel::all();
        return view('/blog', compact('data_artikel'));
    }

    public function detail($id) {
        $article=Artikel::all()->where('id', $id)->first();
        return view('/detail', ['article'=>$article]);
    }
}
