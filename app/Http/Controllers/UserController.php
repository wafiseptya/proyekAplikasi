<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = auth()->user();
        $id = auth()->user()->id;
        $artikel = User::find($id)->artikel()->paginate(5);
        return view('newp', compact('data', 'artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $data = User::where('username', $username)->first();
        $id = $data->id;
        $artikel = User::find($id)->artikel()->paginate(5);
        return view('newp', compact('data', 'artikel'));
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
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'avatar' => 'mimes:jpeg,jpg,png',
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->validator($request->all())->validate();

        $data = User::findOrFail($id);

        $data->name = $request->name;
        if($request->password){
            $data->password = bcrypt($request->password);
        }
        if($request->avatar)
        {
            $file = Input::file('avatar');
            $ext= $file->getClientOriginalExtension();
            $avatarFileName = 'avatar-'.time().'.'.$ext;
            request()->file('avatar')->move(public_path('avatar'), $avatarFileName);
            $filePath = '/avatar/'.$avatarFileName;
            $data->avatar = $filePath;
        }
        $data->updated_at = Carbon::now();
        $data->save();

        return redirect()->route('profile.index')->with('alert','User Berhasil Diperbarui!');

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
