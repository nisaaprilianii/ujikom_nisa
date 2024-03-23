<?php

namespace App\Http\Controllers;
use App\Models\Sepatu;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    public function index()
    {
        $sepatu = Sepatu::all();
        return view('home.sepatu.index', compact(['sepatu']));
    }

    public function create()
    {
        $supplier = Supplier::all();
        return view('home.sepatu.tambah', compact('supplier'));
    }

    public function store(Request $request)
    {
        $messeges = [
            'required' => ':attribute wajib diisi!!',
            'min' => ':attribute wajib diisi minimal :min karakter ya!!',
            'max' => ':attribute wajib diisi maksimal :max karakter ya!!',
        ];

        $validated = $this->validate($request,[
            'nama_sepatu' => 'required|min:3|max:20',
            'merk' => 'required',
            'stok' => 'required',
            'warna' => 'required',
            'id_supplier' => 'required',
        ], $messeges);
        Sepatu::create($validated);
        return redirect('/sepatu');
    }

    public function destroy($id)
    {
        $sepatu = Sepatu::find($id);
        $sepatu->delete();
        return redirect('/sepatu');
    }

    public function show($id)
    {
        $sepatu = Sepatu::find($id);
        $supplier = Supplier::all();
        return view('home.sepatu.edit', compact(['sepatu', 'supplier']));
    }

    public function update($id, Request $request)
    {
        $validated = $this->validate($request,[
            'nama_sepatu' => 'required|min:3|max:20',
            'merk' => 'required',
            'stok' => 'required',
            'warna' => 'required',
            'id_supplier' => 'required',
        ], $messeges);
        $sepatu = Sepatu::find($id);
        $sepatu->update($validated);
        return redirect('/sepatu');
    }
}
