@extends('layouts.master-member')
@section('title', 'Dashboard')
@section('content')
<div class="content-wrapper">
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