<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('home.supplier.index', compact(['supplier']));
    }

    public function create()
    {
        return view('home.supplier.tambah');
    }

    public function store(Request $request)
    {
        $messeges = [
            'required' => ':attribute wajib diisi!!',
            'min' => ':attribute wajib diisi minimal :min karakter ya!!',
            'max' => ':attribute wajib diisi maksimal :max karakter ya!!',
        ];

        $validated = $this->validate($request,[
            'nama_supplier' => 'required|min:5|max:35',
            'nama_perusahaan' => 'required|min:5|max:35',
            'alamat' => 'required',
            'no_telp' => 'required',
        ], $messeges);
        Supplier::create($validated);
        return redirect('/supplier');
    }

    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');
    }

    public function show($id)
    {
        $supplier = Supplier::find($id);
        return view('home.supplier.edit', compact(['supplier']));
    }

    public function update($id, Request $request)
    {
        $validated = $this->validate($request,[
            'nama_supplier' => 'required|min:5|max:35',
            'nama_perusahaan' => 'required|min:5|max:35',
            'alamat' => 'required',
            'no_telp' => 'required',
        ], $messeges);
        $supplier = Supplier::find($id);
        $supplier->update($validated);
        return redirect('/supplier');
    }
}
