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
// Variabel scope / lingkup variabel
// $x = 10;

// function tampilX (){
// global $x;
// echo $x;
//}

// tampilX()

// SUPERGLOBALS
// variabel global milik php
// merupakan array associative

// var_dump($GET);
$produk = [
    [
        "nama" => "iphonex.jpg", 
        "harga" => "7.000.000,-",
        "kondisi" => "baru",
        "tahun" => "2019",
        "gambar" => "iphonex.jpg"
    ],       
    [
        "nama" => "MacBook", 
        "harga" => "9.000.000",
        "kondisi" => "baru",
        "tahun" => "2021",
        "gambar" => "macbookk.jpg"
],       
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Nama Produk</h1>
    <?php foreach ( $produk as $p ) : ?>
            <ul>
                <li>
                    <img src="img/<?= $p["gambar"]; ?> ">
                </li>
                <li>Nama : <?= $p["nama"];?></li>
                <li>Harga : <?= $p["harga"];?></li>
                <li>Kondisi : <?= $p["kondisi"];?></li>
                <li>Tahun : <?= $p["tahun"];?></li>
            </ul>
        <?php endforeach; ?>

    <ul>
        <?php foreach( $produk as $p ) : ?>
        <li>
        <a href="latihan2.php?nama=<?= $p["nama"] ?>&harga=<?= $p["harga"] ?>&kondisi=<?= $p["kondisi"]?>&tahun=<?= $p["tahun"] ?> &gambar=<?= $p["gambar"]; ?>"><?= $p["nama"] ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>