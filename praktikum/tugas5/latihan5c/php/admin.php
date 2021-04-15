<?php
//menghubungkan dengan file php lainnya
require 'functions.php';
// melakukan query
$produk = query("SELECT * FROM produk")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 5 a</title>
    <style type="text/css">
    table {
        background: white;
    }

    th {
        background: darkcyan;
    }

    button{
        background: darkcyan;
        color: white;
        font-size: medium;
    }
    img {
        width:100px;
    }
    </style>
</head>
<body>
    <div class="add">
    <a href="tambah.php"><button>Tambah Data</button>
    </div>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Nama</th>
      <th>Status</th>
      <th>Spesifikasi</th>
      <th>Harga</th>
      <th>Tahun</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($produk as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $p['Foto']; ?>"></td>
        <td><?= $p['Nama']; ?></td>
        <td><?= $p['Status']; ?></td>
        <td><?= $p['Spesifikai']; ?></td>
        <td><?= $p['Harga']; ?></td>
        <td><?= $p['Tahun']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>