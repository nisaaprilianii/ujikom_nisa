@extends('layouts.master')
@section('title', 'Form Edit Data Supplier')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Data Supplier</h4>
                    <form class="forms-sample" action="/supplier/{{$supplier->id}}/update" method="POST">
                        @csrf                        
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Supplier</label>
                            <input type="text" name="nama_supplier" value="{{$supplier->nama_supplier}}" class="form-control" id="exampleInputUsername1" placeholder="Nama Supplier" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" value="{{$supplier->nama_perusahaan}}" class="form-control" id="exampleInputUsername1" placeholder="Nama Perusahaan" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" value="{{$supplier->alamat}}" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <input type="text" name="no_telp" value="{{$supplier->no_telp}}" class="form-control" id="exampleInputPassword1" placeholder="No Telepon" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/supplier" class="btn btn-secondary">Hapus</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection