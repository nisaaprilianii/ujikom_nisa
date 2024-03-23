@extends('layouts.master')
@section('title', 'Data Sepatu')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kelola Data Sepatu <a href="/sepatu/tambah" class="btn btn-info" style="float:right;">Tambah Data</a></h4>
                    </p>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Sepatu</th>
                                    <th>Merk</th>
                                    <th>Stok</th>
                                    <th>Warna</th>
                                    <th>Supplier</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sepatu as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->nama_sepatu }}</td>
                                    <td>{{ $u->merk }}</td>
                                    <td>{{ $u->stok }}</td>
                                    <td>{{ $u->warna }}</td>
                                    <td>{{ $u->supplier->nama_supplier }}</td>
                                    <td>
                                        <a href="/sepatu/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/sepatu/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Ini Akan Dihapus??')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection