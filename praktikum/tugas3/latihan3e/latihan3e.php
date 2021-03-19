<?php

$products = [

    [
        "foto" => "airpods.jpg",
        "nama" => "Apple Airpods",
        "status" => "New",
        "spesifikasi" => "Wireless",
        "tahun" => "2021",
        "harga" => "Rp. 2,109,000.-"
    ],
    [
        "foto" => "applewatch.jpg",
        "nama" => "Iwatch",
        "status" => "Second",
        "spesifikasi" => "step, Bpm, Mmhg, Sport",
        "tahun" => "2019",
        "harga" => "Rp. 3,190,000.-"
    ],
    [
        "foto" => "ipad.jpg",
        "nama" => "iPad",
        "status" => "New",
        "spesifikasi" => "32GB/128GB-10,2 inch-8MP",
        "tahun" => "2021",
        "harga" => "Rp. 5.349.000"
    ],
    [
        "foto" => "iphone 12.jpg",
        "nama" => "Iphone 12",
        "status" => "New",
        "spesifikasi" => "6,1 inch-64/128/256GB-12MP",
        "tahun" => "2021",
        "harga" => "Rp. 18.550.000,-"
    ],
    [
        "foto" => "iphone6plus.jpg",
        "nama" => "Iphone 6",
        "status" => "Second",
        "spesifikasi" => "5,4inch-4GB-8MP",
        "tahun" => "2018",
        "harga" => "Rp. 2.250.000"
    ],
    [
        "foto" => "iphone7-black.png",
        "nama" => "Iphone 7",
        "status" => "Second",
        "spesifikasi" => "black-dualsim-32GB",
        "tahun" => "2019",
        "harga" => "Rp. 4.299.000"
    ],
    [
        "foto" => "iphone8.jpg",
        "nama" => "Iphone 8",
        "status" => "New",
        "spesifikasi" => "64GB-8/12MP",
        "tahun" => "2020",
        "harga" => "Rp. 4.750.000"
    ],
    [
        "foto" => "iphone11.jpg",
        "nama" => "Iphone 11",
        "status" => "New",
        "spesifikasi" => "128GB-12MP",
        "tahun" => "2020",
        "harga" => "Rp. 12.100.000"
    ],
    [
        "foto" => "iphonex.jpg",
        "nama" => "Iphone X",
        "status" => "Second",
        "spesifikasi" => "64GB-12MP",
        "tahun" => "2020",
        "harga" => "Rp. 5.650.000"
    ],
    [
        "foto" => "macbookk.jpg",
        "nama" => "macBook",
        "status" => "New",
        "spesifikasi" => "IOS-",
        "tahun" => "2020",
        "harga" => "Rp. 5.750.000.-"
    ],
    
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> latihan3e</title>

    <link rel="stylesheet" href="css/style.css">


    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style type="text/css">
    img {
        width:100px
    }
    </style>


</head>
<body>

    <div class="container mt-5 mb-5">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Status</th>
                <th scope="col">spesifikasi</th>
                <th scope="col">Harga</th>
                <th scope="col">Tahun</th>
            </tr>
            </thead>
            <?php $i = 1 ?>
            <?php foreach( $products as $p ) : ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><img src="img/<?= $p["foto"]; ?>"></td>
                    <td><?= $p["nama"] ?></td>
                    <td><?= $p["status"] ?></td>
                    <td><?= $p["spesifikasi"] ?></td>
                    <td><?= $p["harga"] ?></td>
                    <td><?= $p["tahun"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>


    
</body>
</html>