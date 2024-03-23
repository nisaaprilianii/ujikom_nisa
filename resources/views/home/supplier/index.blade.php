@extends('layouts.master')
@section('title', 'Data Supplier')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kelola Data Supplier <a href="/supplier/tambah" class="btn btn-info" style="float:right;">Tambah Data</a></h4>
                    </p>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Supplier</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($supplier as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->nama_supplier }}</td>
                                    <td>{{ $u->nama_perusahaan }}</td>
                                    <td>{{ $u->alamat }}</td>
                                    <td>{{ $u->no_telp }}</td>
                                    <td>
                                        <a href="/supplier/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/supplier/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Ini Akan Dihapus??')">Hapus</a>
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