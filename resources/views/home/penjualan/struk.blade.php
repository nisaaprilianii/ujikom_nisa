<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
</head>
<body onload="window.print()">
    <table width="400px">
        <tr align="center">
            <td colspan="3"><b>PT Sepatu.</b></td>
        </tr>
        <tr align="center">
            <td colspan="3">Struk Penjualan Sepatu</td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="2"> Petugas : {{ Auth()->User()->name }}</td>
            <td align="right">Tanggal : <?php echo date("Y/m/d");?></td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td> <b>User</b> </td>
            <td align="right">:</td>
            <td>{{$penjualan->user->name}}</td>
        </tr>
        <tr>
            <td> <b>Member</b> </td>
            <td align="right">:</td>
            <td>{{$penjualan->member->nama}}</td>
        </tr>
        <tr>
            <td> <b>Tgl Bayar</b> </td>
            <td align="right">:</td>
            <td>{{$penjualan->tgl_bayar}}</td>
        </tr>
        <tr>
            <td> <b>Bulan Bayar</b> </td>
            <td align="right">:</td>
            <td>{{$penjualan->bulan_bayar}}</td>
        </tr>
        <tr>
            <td> <b>Sepatu</b> </td>
            <td align="right">:</td>
            <td>{{$penjualan->sepatu->nama_sepatu}}</td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td> <b>Jumlah Bayar</b> </td>
            <td align="right">:</td>
            <td>{{$penjualan->jumlah_bayar}}</td>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <td colspan="3">
                Note:
                <br>
                <b>- Struk Ini Sebagai Bukti Penjualan</b>
                <br>
                <b>- Harap Simpan dengan Baik</b>
            </td>
        </tr>
</body>
</html>