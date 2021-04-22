<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal ditambahkan!');
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
  <title>halaman tambah form</title>
</head>

<body>
  <h3>Form Tambah Daftar Produk</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="Foto">Foto:</label><br>
        <input type="text" name="Foto" id="Foto" required><br><br>
      </li>
      <li>
        <label for="Nama">Nama :</label><br>
        <input type="text" name="Nama" id="Nama" required><br><br>
      </li>
      <li>
        <label for="Status">Status:</label><br>
        <input type="text" name="Status" id="Status" required><br><br>
      </li>
      <li>
        <label for="Spesifikai">Spesifikasi:</label><br>
        <input type="text" name="Spesifikai" id="Spesifikai" required><br><br>
      </li>
      <li>
        <label for="Harga">Harga:</label><br>
        <input type="text" name="Harga" id="Harga" required><br><br>
      </li>
      <li>
        <label for="Tahun">Tahun:</label><br>
        <input type="text" name="Tahun" id="Tahun" required><br><br>
      </li>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>