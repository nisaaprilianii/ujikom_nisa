@extends('layouts.master')
@section('title', 'Form Tambah Data Penjualan')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Penjualan</h4>
                    <form class="forms-sample" action="/penjualan/simpan" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">User</label>
                            <select name="id_kasir" id="" class="form-control">
                                @foreach ($user as $u)
                                <option value="{{$u->id}}">{{$u->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Member</label>
                            <select name="id_member" id="" class="form-control">
                                @foreach ($member as $u)
                                <option value="{{$u->id}}">{{$u->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tgl Bayar</label>
                            <input type="date" name="tgl_bayar" class="form-control" id="exampleInputEmail1" placeholder="Tgl Bayar" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bulan Bayar</label>
                            <input type="text" name="bulan_bayar" class="form-control" id="exampleInputPassword1" placeholder="Bulan Bayar" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sepatu</label>
                            <select name="id_sepatu" id="" class="form-control">
                                @foreach ($sepatu as $u)
                                <option value="{{$u->id}}">{{$u->nama_sepatu}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jumlah Bayar</label>
                            <input type="text" name="jumlah_bayar" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Bayar" required>
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