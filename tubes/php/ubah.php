<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$p = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman ubah form</title>
  <style type="text/css">

body{
    background: linear-gradient(to right,#FAFAD2, #008B8B, #FAFAD2);
}
.wrap{
  width:40%;
  margin:auto;
  color:white;
  border-radius:10px;
  font-family:comic sans ms; 
  background-color:#008B8B;
}
.container{
  margin:10%;
  padding:5px;
}
h2{
  text-align:center;
}
button{
  width: 70px;
  font-family: comic sans ms;

  background-color: #696969;
  border-radius: 7px;
}

    </style>
</head>

<body>
  <div class="wrap">
    <div class="container">
    <h2>Form Ubah Daftar Produk</h2>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
    <table>  
    <ul>
        <li>
          <label for="Foto">Foto:</label><br>
          <input type="text" name="Foto" id="Foto" required value="<?= $p['Foto']; ?>"><br><br>
        </li>
        <li>
          <label for="Nama">Nama :</label><br>
          <input type="text" name="Nama" id="Nama" required value="<?= $p['Nama']; ?>"><br><br>
        </li>
        <li>
          <label for="Status">Status:</label><br>
          <input type="text" name="Status" id="Status" requiredvalue="<?= $p['Status']; ?>"><br><br>
        </li>
        <li>
          <label for="Spesifikai">Spesifikasi:</label><br>
          <input type="text" name="Spesifikai" id="Spesifikai" required value="<?= $p['Spesifikai']; ?>"><br><br>
        </li>
        <li>
          <label for="Harga">Harga:</label><br>
          <input type="text" name="Harga" id="Harga" required value="<?= $p['Harga']; ?>"><br><br>
        </li>
        <li>
          <label for="Tahun">Tahun:</label><br>
          <input type="text" name="Tahun" id="Tahun" required value="<?= $p['Tahun']; ?>"><br><br>
        </li>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
          <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
        </ul>
    </form>
    </div>
    </div>
</body>

</html>