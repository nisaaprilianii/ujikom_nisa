<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Models\User;
use App\Models\Member;
use App\Models\Sepatu;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('home.penjualan.index', compact(['penjualan']));
    }

    public function create()
    {
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('home.penjualan.tambah', compact('user', 'member', 'sepatu'));
    }

    public function cetak()
    {
        $penjualan = Penjualan::all();
        return view('home.penjualan.cetak', compact('penjualan'));
    }

    public function struk($id)
    {
        $penjualan = Penjualan::find($id);
        return view('home.penjualan.struk', compact('penjualan'));
    }

    public function store(Request $request)
    {
        $messeges = [
            'required' => ':attribute wajib diisi!!',
        ];

        $validated = $this->validate($request,[
            'id_kasir' => 'required',
            'id_member' => 'required',
            'tgl_bayar' => 'required',
            'bulan_bayar' => 'required',
            'id_sepatu' => 'required',
            'jumlah_bayar' => 'required',
        ], $messeges);
        Penjualan::create($validated);
        return redirect('/penjualan');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }

    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('home.penjualan.edit', compact(['penjualan', 'user', 'member', 'sepatu']));
    }

    public function update($id, Request $request)
    {
        $validated = $this->validate($request,[
            'id_kasir' => 'required',
            'id_member' => 'required',
            'tgl_bayar' => 'required',
            'bulan_bayar' => 'required',
            'id_sepatu' => 'required',
            'jumlah_bayar' => 'required',
        ], $messeges);
        $penjualan = Penjualan::find($id);
        $penjualan->update($validated);
        return redirect('/penjualan');
    }
}
