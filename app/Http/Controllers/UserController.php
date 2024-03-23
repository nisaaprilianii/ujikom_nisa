<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('home.user.index', compact(['user']));
    }

    public function create()
    {
        return view('home.user.tambah');
    }

    public function store(Request $request)
    {
        $messeges = [
            'required' => ':attribute wajib diisi!!',
            'min' => ':attribute wajib diisi minimal :min karakter ya!!',
            'max' => ':attribute wajib diisi maksimal :max karakter ya!!',
        ];

        $validated = $this->validate($request,[
            'name' => 'required|min:5|max:20',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ], $messeges);
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        return redirect('/user');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('home.user.edit', compact(['user']));
    }

    public function update($id, Request $request)
    {
        $validated = $this->validate($request,[
            'name' => 'required|min:5|max:20',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ], $messeges);
        $user = User::find($id);
        $user->update($validated);
        return redirect('/user');
    }
}
