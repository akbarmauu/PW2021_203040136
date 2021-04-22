// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
} 

require 'functions.php';

//mengambil id dari url
$id = $_GET['id'];

//melakukan query dengan paramete id yang diambil dari url
$produk = query("SELECT * FROM produk WHERE id = $id")[0];
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

    <style type="text/css">
    img {
        width:100px;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="foto">
        <img src="../assets/img/<?= $produk["Foto"]; ?>" alt="">
        </div>
            <div class="keterangan">
                    <p><?= $produk["Nama"]; ?></p>
                    <p><?= $produk["Status"]; ?></p>
                    <p><?= $produk["Spesifikai"]; ?></p>
                    <p><?= $produk["Harga"]; ?></p>
                    <p><?= $produk["Tahun"]; ?></p>
            </div>

            <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>

    
</body>
</html>