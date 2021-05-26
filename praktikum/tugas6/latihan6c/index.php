<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

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
    <title>Latihan 6c</title>
    <style>
        .container {
            width: 30% !important;
            border: 2px solid  #EBDEF0;
            padding-top: 5px;
            margin-right: 20%;
            background-color: #00FFFF;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 6px 15px 0 rgba(0, 0, 0, 0.19);
            
        }
        
    </style>

    <link rel="stylesheet" href="../css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
<br>
<a href="php/login.php"><button style="background-color: #00FFFF ; color: black; border-radius: 10px; margin-left: 40px;">Masuk ke halaman admin</button></a>
<form action="" method="get">
        <input type="text" name="keyword" style="background-color:  #00FFFF; border-radius: 10px; margin-left: 40px;" autofocus>
        <button type="submit" name="cari" style="background-color: #00FFFF; border-radius: 10px;">Cari!</button>
</form>


<div class="container mt-5 mb-5">
    <?php foreach ($produk as $p) : ?>
        <tr> 
            <td><p class="nama"></td>
            <td><a href="php/detail.php?id=<?= $p['id'] ?>" style="color:  #CD6155;"> 
                <?= $p["Nama"] ?>
            </a></td>
        </tr>
    <?php endforeach; ?>
</div>
