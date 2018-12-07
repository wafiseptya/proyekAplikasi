<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Wisata;
use App\User;
use App\Artikel;
use App\Kategori;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();  
        $wisata = Wisata::all();
        $user = User::all();
        $kategori = Kategori::all();

        return view('admin/dashboard', compact('artikel', 'wisata', 'user', 'kategori'));
    }
}
