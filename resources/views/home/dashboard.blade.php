@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
<div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-facebook d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        
                        <div class="ms-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">{{$jumlah_member}}</h5>
                            <p class="mt-2 text-white card-text">Jumlah Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-google d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                        
                        <div class="ms-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">{{$jumlah_sepatu}}</h5>
                            <p class="mt-2 text-white card-text">Jumlah Sepatu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card bg-twitter d-flex align-items-center">
                <div class="card-body py-5">
                    <div class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                       
                        <div class="ms-3 ml-md-0 ml-xl-3">
                            <h5 class="text-white font-weight-bold">{{$total_minggu->total_price}}</h5>
                            <p class="mt-2 text-white card-text">Total Minggu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">History Transaksi Penjualan</h4>
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row end -->
    
    <!-- row end -->
</div>
@endsection