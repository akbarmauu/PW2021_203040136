<?php
// menghubungkan dengan file php lainnya
require 'php/admin.php';

// melakukan query
if (isset($_GET['cari']))
{
  $keyword = $_GET['keyword'];
  $produk= query("SELECT * FROM produk WHERE
              Nama LIKE '%$keyword%' OR 
              Status LIKE '%$keyword%' OR
              Spesifikai LIKE '%$keyword%' OR
              Harga LIKE '%$keyword%' OR
              Tahun LIKE '%$keyword%'");
} else {
  $produk = query("SELECT * FROM produk");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 4 c</title>

    <link rel="stylesheet" href="css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<div class="add">
    <a href="php/admin.php"><button>Halaman Admin</button>
    </div>
    <br>

<div class="container mt-5 mb-5">
    <?php foreach ($produk as $p) : ?>
        <tr>
                    <td><p class="nama"></td>
                    <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="background-color:blue; color:white;"> 
                            <?= $p["Nama"] ?>
                        </a></td>
                        </tr>
                <?php endforeach; ?>
</div>
