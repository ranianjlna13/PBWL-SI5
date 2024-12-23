<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   <h1> Halaman Mahasiswa </h1>

   <div class="container">
   <table>
    <div class="row">
        <div class="col-6">
        <h4>Tabel Mahasiswa</h4>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i < $jumlah; $i++)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$nim[$i] }}</td>
            </tr>
                
            @endfor
        </tbody>
        </div>
    </div>
   </table>
   </div>
    
</body>
<link rel="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>