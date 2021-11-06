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
    <tr align = "center"><th colspan = "6" rowspan = "1"><b>DATA PESANAN</b></th></tr>

    <tr>
        <th>Id Pesanan</th>
        <th>Nama Pelanggan</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Tanggal Pesan</th>
    </tr>

    @foreach ($pesanan as $data)
    <tr>
        <td>{{ $data['id_pesanan'] }}</td>
        <td>{{ $data['nama_pelanggan'] }}</td>
        <td>{{ $data['nama_barang'] }}</td>
        <td>{{ $data['qty'] }}</td>
        <td>{{ $data['tanggal_pesan'] }}</td>
    </tr>
    @endforeach

    </table>
    </center>
</body>
</html>