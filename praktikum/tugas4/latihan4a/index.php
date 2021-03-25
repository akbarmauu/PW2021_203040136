<?php

// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih database
mysqli_select_db($conn, "pw_tubes_203040136");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 4 A</title>

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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr> 
                    <th scope="row"><?= $i ?></th>
                    <td><img src="assets/img/<?= $row["Foto"]; ?>"></td>
                    <td><?= $row["Nama"]; ?></td>
                    <td><?= $row["Status"]; ?></td>
                    <td><?= $row["Spesifikai"]; ?></td>
                    <td><?= $row["Harga"]; ?></td>
                    <td><?= $row["Tahun"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </div>


    
</body>
</html>