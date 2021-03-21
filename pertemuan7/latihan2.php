<?php
/* 
    Akbar Maulana
    203040136
    https://github.com/akbarmauu/pw2021_203040136
    Pertemuan 7 - 20 maret 2021
    Mempelajari mengenai GET & POST 
*/
?>
<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["kondisi"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["harga"]; ?></li>
    <li><?= $_GET["kondisi"]; ?></li>
    <li><?= $_GET["tahun"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar Produk</a>
    
</body>
</html>