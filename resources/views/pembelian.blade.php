<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border=1>
    <tr><th colspan = "6" rowspan = "1"><b>DATA PEMBELIAN</b></th></tr>

    <tr>
        <th rowspan = 1 colspan= 1>Id Pembelian</th>
        <th rowspan = 1 colspan= 1>Nama Barang</th>
        <th rowspan = 1 colspan= 1>Nama Suplier</th>
        <th rowspan = 1 colspan= 1>Qty</th>
        <th rowspan = 1 colspan= 1>Tanggal</th>
    </tr>

    @foreach ($pembelian as $data)
    <tr>
        <td>{{ $data['id_pembelian'] }}</td>
        <td>{{ $data['nama_barang'] }}</td>
        <td>{{ $data['nama_suplier'] }}</td>
        <td> {{ $data['qty'] }}</td>
        <td>{{ $data['tanggal'] }}</td>
    </tr>
@endforeach

    </table>
    </center>
</body>
</html>