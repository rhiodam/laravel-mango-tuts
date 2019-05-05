<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index(){
        $artikel = Artikel::all();
        return view('artikel.index',['artikel' => $artikel]);
    }
    
}
