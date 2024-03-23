@extends('layouts.master')
@section('title', 'Form Tambah Data Member')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Member</h4>
                    <form class="forms-sample" action="/member/simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputUsername1" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" placeholder="No Telepon" required>
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