<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
$produk = query("SELECT * FROM produk")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 4 B</title>

    <link rel="stylesheet" href="css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style type="text/css">
    img {
        width:100px;
    }
    </style>
</head>
<body>

    <div class="container mt-5 mb-5">
        <table class="table table-bordered table-hover">  
            <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">Spesifikasi</th>
                <th scope="col">Harga</th>
                <th scope="col">Tahun</th>
            </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach ($produk as $p) : ?>
                <tr> 
                    <th scope="row"><?= $i ?></th>
                    <td><img src="assets/img/<?= $p["Foto"]; ?>"></td>
                    <td><?= $p["Nama"]; ?></td>
                    <td><?= $p["Status"]; ?></td>
                    <td><?= $p["Spesifikai"]; ?></td>
                    <td><?= $p["Harga"]; ?></td>
                    <td><?= $p["Tahun"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>


    
</body>
</html>