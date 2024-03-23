@extends('layouts.master')
@section('title', 'Form Tambah Data Supplier')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Supplier</h4>
                    <form class="forms-sample" action="/sepatu/simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Sepatu</label>
                            <input type="text" name="nama_sepatu" class="form-control" id="exampleInputUsername1" placeholder="Nama Sepatu" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Merk</label>
                            <input type="text" name="merk" class="form-control" id="exampleInputEmail1" placeholder="Merk" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Stok</label>
                            <input type="text" name="stok" class="form-control" id="exampleInputPassword1" placeholder="Stok" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Warna</label>
                            <input type="text" name="warna" class="form-control" id="exampleInputPassword1" placeholder="Warna" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Supplier</label>
                            <select name="id_supplier" id="" class="form-control">
                                @foreach ($supplier as $u)
                                <option value="{{$u->id}}">{{$u->nama_supplier}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection