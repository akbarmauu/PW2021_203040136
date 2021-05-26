<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
//menghubungkan dengan file php lainnya
require 'functions.php';
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
    <title>Tubes</title>
    <!-- Import bootsrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!-- Bootstrap Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

   <style type="text/css">

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
    .admin{
      margin:auto;
      text-align: center;
      background-color:#008B8B;
      width:100%;
      height:100px;
      padding-bottom:5px;
      color:white;
      padding:5px;
    }
    .logout{
      padding:5px;
      float: right;
      color:white;
      border-radius:10px;
      font-family:comic sans ms; 
      background-color:white;
    }
    .add{
      padding:5px;
      float: left;
      color:white;
      border-radius:10px;
      font-family:comic sans ms; 
      background-color:white;
    }
    </style>
</head>
<body>
<div class="admin">
  <h2>HALAMAN ADMIN</h2>
    <div class="logout">
    <a href="logout.php"><button>Logout</button></a>
  </div>
    <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    </div>
    <br>

  

    <nav class="navbar navbar-light bg-light">
  <form action="" method="get">
    <input type="text" name="keyword" size="30"autofocus placeholder="Cari produk Anda di sini.." aria-label="Search" autocomplete="off">
    <button name="cari" type="submit">Cari!</button>
  </form>
</nav>
<table class="table table-bordered table-striped table-hover">
    <caption>HALAMAN ADMIN</caption>
	<thead>
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
	</thead>
	<?php if (empty($produk)) : ?>
    <tr>
      <td colspan="9">
        <h1>Data Tidak Ditemukan!</h1>
      </td>
    </tr>
    <?php endif ; ?>

    <?php $i = 1; ?>
    <?php foreach ($produk as $p) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href="ubah.php?id=<?= $p['id']; ?>"><button>Ubah</button></a>
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
  <!--js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
