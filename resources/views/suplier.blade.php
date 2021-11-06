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
    <tr><th colspan = "6" rowspan = "1"><b>DATA SUPLIER</b></th></tr>

    <tr>
        <th rowspan = 1 colspan= 1>Id Suplier</th>
        <th rowspan = 1 colspan= 1>Nama</th>
        <th rowspan = 1 colspan= 1>Alamat</th>
        <th rowspan = 1 colspan= 1>Kode Pos</th>
        <th rowspan = 1 colspan= 1>Kota</th>
    </tr>

    @foreach ($suplier as $data)
    <tr>
        <td>{{ $data['id_suplier'] }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['alamat'] }}</td>
        <td>{{ $data['kode_pos'] }}</td>
        <td>{{ $data['kota'] }}</td>
    </tr>
    @endforeach 

    </table>
    </center>
</body>
</html>