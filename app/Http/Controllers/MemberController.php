<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::all();
        return view('home.member.index', compact(['member']));
    }

    public function create()
    {
        return view('home.member.tambah');
    }

    public function store(Request $request)
    {
        $messeges = [
            'required' => ':attribute wajib diisi!!',
            'min' => ':attribute wajib diisi minimal :min karakter ya!!',
            'max' => ':attribute wajib diisi maksimal :max karakter ya!!',
        ];

        $validated = $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ], $messeges);
        $validated['password'] = bcrypt($validated['password']);
        Member::create($validated);
        return redirect('/member');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/member');
    }

    public function show($id)
    {
        $member = Member::find($id);
        return view('home.member.edit', compact(['member']));
    }

    public function update($id, Request $request)
    {
        $validated = $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ], $messeges);
        $member = Member::find($id);
        $member->update($validated);
        return redirect('/member');
    }
}
