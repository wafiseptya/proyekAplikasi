<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class HomepageController extends Controller
{

    

    public function index()
    {
        $kategori = Kategori::all();
        return view('homepage',compact('kategori'));
    }
}
