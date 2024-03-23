@extends('layouts.master')
@section('title', 'Data User')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kelola Data User <a href="/user/tambah" class="btn btn-info" style="float:right;">Tambah Data</a></h4>
                    </p>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->username }}</td>
                                    <td>{{ $u->level }}</td>
                                    <td>
                                        <a href="/user/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/user/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Ini Akan Dihapus??')">Hapus</a>
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