@extends('layouts.master')
@section('title', 'Form Edit Data Member')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Data Member</h4>
                    <form class="forms-sample" action="/member/{{$member->id}}/update" method="POST">
                        @csrf                        
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nama</label>
                            <input type="text" name="nama" value="{{$member->nama}}" class="form-control" id="exampleInputUsername1" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" name="alamat" value="{{$member->alamat}}" class="form-control" id="exampleInputEmail1" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">No Telepon</label>
                            <input type="text" name="no_telp" value="{{$member->no_telp}}" class="form-control" id="exampleInputPassword1" placeholder="No Telepon" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/member" class="btn btn-secondary">Hapus</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection