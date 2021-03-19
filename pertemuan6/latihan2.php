<?php
/* 
    Akbar Maulana
    203040136
    https://github.com/akbarmauu/pw2021_203040136
    Pertemuan 5 - 19 maret 2021
    Mempelajari mengenai Array Associative
*/
?>

<?php
// $mahasiswa = [
//   ["Akbar maulana", "203040136", "TIF", "akbarmaumau12@gmail.com"],
//    ["Amar sobri", "203040221", "TM", "marsobri@gmail.com"],
//    ["valdy", "203040121", "TI", "valdya@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendii
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
    <title>Latihan Array</title>
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

</body>
</html>