<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen</title>
</head>
<body>
<center><h2>Data Absen Kelas XII RPL 3</h2></center>
    <ul>
        @foreach ($data1 as $data2)
        NIS : {{ $data2['Nis'] }}<br>
        Nama : {{ $data2['Nama'] }}<br>
        Jenis Kelamin : {{ $data2['Jenis Kelamin'] }}<br>
        Kelas : {{ $data2['Kelas'] }}<br>
        Alamat : {{ $data2['Alamat'] }}<br>
        <hr>
        @endforeach
    </ul>
    
</body>
</html>