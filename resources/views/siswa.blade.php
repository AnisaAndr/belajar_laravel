<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <center><h2>Data Siswa</h2></center>
    <ul>
        @foreach ($siswas as $siswa2)
        Id : {{ $siswa2['id'] }}<br>
        Nama : {{ $siswa2['nama'] }}<br>
        Username : {{ $siswa2['username'] }}<br>
        Email : {{ $siswa2['email'] }}<br>
        Alamat : {{ $siswa2['alamat'] }}<br>
        Mapel : 
        @foreach ($siswa2['mapel'] as $mapel) 
        <ul>
            <li>{{ $mapel }}</li>
        </ul>
        @endforeach
        <hr>
        @endforeach
    </ul>
</body>
</html>