<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\User;
use App\Comment;
use App\Like;
use Carbon\Carbon;
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
        $data->wisata_id = $request->wisata_id;
        $data->users_id = $request->users_id;
        
        $avatarFileName = 'banner-'.time().'.'.request()->banner->getClientOriginalExtension();
        $path = asset('banner').'/'.$avatarFileName;
        $data->banner = $path;
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
        $comments = Artikel::find($id)->komentar()->orderBy('created_at', 'asc')->paginate(5);
        $like = Artikel::find($id)->like();
	    return view('artikel', compact('comments', 'like', 'data', 'user', 'wisata', 'related'));
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
    
    public function like($id, $uid)
    {   
        // dd('test');
        if (Like::where([
            ['user_id', '=', $uid],
            ['type', '=', 'LIKE']
        ])->exists())
        {
            $data = Like::where([
                ['user_id', '=', $uid],
                ['type', '=', 'LIKE']
                ])->first();
                $lid = $data->id;
                Like::destroy($lid);
                
                $artikel = Artikel::findOrFail($id);
                $curLike = Like::where([
                    ['artikel_id', '=', $id],
                    ['type', '=', 'LIKE']
                ])->count();
                $curDislike = Like::where([
                    ['artikel_id', '=', $id],
                    ['type', '=', 'DISLIKE']
                ])->count();
                $curVote = $curLike - $curDislike;
                $artikel->vote = $curVote;
                $artikel->save();
                return redirect()->back()->with('alert', 'Unliked!');
        }
        else 
        {
            $like = new Like;
            $like->artikel_id = $id;
            $like->user_id = $uid;
            $like->type = 'LIKE';
            $like->save();
            $artikel = Artikel::findOrFail($id);
            $curLike = Like::where([
                ['artikel_id', '=', $id],
                ['type', '=', 'LIKE']
            ])->count();
            $curDislike = Like::where([
                ['artikel_id', '=', $id],
                ['type', '=', 'DISLIKE']
            ])->count();
            $curVote = $curLike - $curDislike;
            $artikel->vote = $curVote;
            $artikel->save();
            return redirect()->back()->with('alert', 'Liked!');
        }
    }

    public function dislike($id, $uid)
    {
        
        if (Like::where([
            ['user_id', '=', $uid],
            ['type', '=', 'DISLIKE']
        ])->exists())
        {
            $data = Like::where([
                ['user_id', '=', $uid],
                ['type', '=', 'DISLIKE']
            ])->first();
            $lid = $data->id;
            Like::destroy($lid);
            
            $artikel = Artikel::findOrFail($id);
            $curLike = Like::where([
                ['artikel_id', '=', $id],
                ['type', '=', 'LIKE']
            ])->count();
            $curDislike = Like::where([
                ['artikel_id', '=', $id],
                ['type', '=', 'DISLIKE']
            ])->count();
            $curVote = $curLike - $curDislike;
            $artikel->vote = $curVote;
            $artikel->save();
            
            return redirect()->back()->with('alert', 'Undisliked!');
        }
        else 
        {
            $like = new Like;
            $like->artikel_id = $id;
            $like->user_id = $uid;
            $like->type = 'DISLIKE';
            $like->save();
            $artikel = Artikel::findOrFail($id);
            $curLike = Like::where([
                ['artikel_id', '=', $id],
                ['type', '=', 'LIKE']
            ])->count();
            $curDislike = Like::where([
                ['artikel_id', '=', $id],
                ['type', '=', 'DISLIKE']
            ])->count();
            $curVote = $curLike - $curDislike;
            $artikel->vote = $curVote;
            $artikel->save();
            
            return redirect()->back()->with('alert', 'Disliked!');
        }
    }

    public function comment(Request $request, $id, $uid)
    {
        $data = new Comment;
        $data->value = $request->value;
        $data->artikel_id = $id;
        $data->user_id = $uid;
        $data->save();
        return redirect()->back()->with('flash_success', 'Comment Success!');
    }
}
