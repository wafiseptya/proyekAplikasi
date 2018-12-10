<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Wisata;
use App\User;
use App\Artikel;
use App\Kategori;
use Carbon\Carbon;

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

    public function wisata()
    {
        $wisata = Wisata::all();
        return view('admin/wisata', compact('wisata'));

    }

    public function tambahWisata()
    {
        $kategori = Kategori::all();

        return view('admin/tambahWisata', compact('kategori'));
    }

    public function storeWisata(Request $request)
    {
        $data = new Wisata;
        $data->nama_wisata = $request->nama_wisata;
        $data->deskripsi = $request->deskripsi;
        $data->kategori_id = $request->kategori_id;
        
        $bannerFileName = 'banner-'.time().'.'.request()->banner->getClientOriginalExtension();
        $path = asset('banner').'/'.$bannerFileName;
        $data->banner = $path;
        request()->banner->move(public_path('banner'), $bannerFileName);
        
        $data->save();
        return redirect()->route('admin.wisata')->with('alert','Wisata Berhasil Dibuat!');
    }

    public function editWisata($id)
    {
        $kategori = Kategori::all();
        $item = Wisata::findOrFail($id);
        return view('admin/editWisata', compact('kategori', 'item'));
    }

    public function updateWisata(Request $request, $id)
    {
        $data = Wisata::findOrFail($id);

        $data->nama_wisata = $request->nama_wisata;
        $data->deskripsi = $request->deskripsi;
        $data->kategori_id = $request->kategori_id;
        if($request->banner)
        {
            $bannerFileName = 'banner-'.time().'.'.request()->banner->getClientOriginalExtension();
            $path = asset('banner').'/'.$bannerFileName;
            $data->banner = $path;
            request()->banner->move(public_path('banner'), $bannerFileName);
        }
        
        $data->updated_at = Carbon::now();
        $data->save();
        return redirect()->route('admin.wisata')->with('alert','Wisata Berhasil Diperbarui!');
    }

    public function destroyWisata($id)
    {
        Wisata::destroy($id);

        return redirect()->route('admin.wisata')->with('alert','Wisata Berhasil Dihapus!'); 
    }
}
