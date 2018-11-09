<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::all();
	    return view('wisata', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $uid = auth()->id();
        return view('makeArtikel', compact('id', 'uid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Artikel;
        $data->judul_artikel = $request->judul_artikel;
        $data->isi_artikel = $request->isi_artikel;
        $data->banner = $request->banner;
        $data->wisata_id = $request->wisata_id;
        $data->users_id = $request->users_id;
        
        $avatarFileName = 'banner-'.time().'.'.request()->banner->getClientOriginalExtension();
        $data->banner = $avatarFileName;
        request()->banner->move(public_path('banner'), $avatarFileName);
        
        $data->save();
        return redirect('artikel/'.$data->id.'/'.$data->judul_artikel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $slug)
    {
        $data = Artikel::find($id);
        $user = User::find($data->users_id);
        $wisata_id = Artikel::find($id)->wisata_id;
        $wisata = Artikel::find($id)->wisata()->first();
        $related = Artikel::where('wisata_id', $wisata_id)
        ->orderBy('vote', 'desc')
        ->take(4)
        ->get();
	    return view('artikel', compact('data', 'user', 'wisata', 'related'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
