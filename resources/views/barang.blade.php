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
        <tr><th colspan = "6" rowspan = "1"><b>DATA BARANG</b></th></tr>


<tr>
<th rowspan = 1 colspan= 1>Id Barang</th>
<th rowspan = 1 colspan= 1>Nama </th>
<th rowspan = 1 colspan= 1>Varian</th>
<th rowspan = 1 colspan= 1>Harga Beli</th>
<th rowspan = 1 colspan= 1>Harga Jual</th>
</tr>

@foreach ($brg as $data)
<tr>
    <td>{{ $data['id_barang'] }}</td>
    <td>{{ $data['nama'] }}</td>
    <td>{{ $data['varian'] }}</td>
    <td>{{ $data['harga_beli'] }}</td>
    <td>{{ $data['harga_jual'] }}</td>
</tr>

@endforeach

</table>
</center>
</body>
</html>