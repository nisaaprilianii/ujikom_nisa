<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi Penjualan</title>
</head>
<body onload="window.print()">
    <center>
        <h2>Laporan Transaksi Penjualan</h2>
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
    </center>

    <div class="kotak" style="margin-left: 800px">
        <p>Bandung,..........</p>
        <br>
        <br>
        <p>Administrasi Penjualan</p>
    </div>
</body>
</html>