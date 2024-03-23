@extends('layouts.master')
@section('title', 'Data Penjualan')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kelola Data Penjualan <a href="/penjualan/tambah" class="btn btn-info" style="float:right;">Tambah Data</a></h4>
                    <a href="/penjualan/cetak" target="_blank" class="btn btn-success"><span class="fa fa-print"></span>Cetak Laporan</a>
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User</th>
                                    <th>Member</th>
                                    <th>Tgl Bayar</th>
                                    <th>Bulan Bayar</th>
                                    <th>Sepatu</th>
                                    <th>jumlah_bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penjualan as $u)
                                <tr>
                                    <td>{{ $u->id }}</td>
                                    <td>{{ $u->user->name }}</td>
                                    <td>{{ $u->member->nama }}</td>
                                    <td>{{ $u->tgl_bayar }}</td>
                                    <td>{{ $u->bulan_bayar }}</td>
                                    <td>{{ $u->sepatu->nama_sepatu }}</td>
                                    <td>{{ $u->jumlah_bayar }}</td>
                                    <td>
                                        <a href="/penjualan/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/penjualan/{{ $u->id }}/struk" target="_blank" class="btn btn-success"><span class="fa fa-print"></span>Cetak</a>
                                        <a href="/penjualan/{{ $u->id }}/hapus" class="btn btn-danger" onClick="return confirm('Yakin Data Ini Akan Dihapus??')">Hapus</a>
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