<?php
/* 
    Akbar Maulana
    203040136
    https://github.com/akbarmauu/pw2021_203040136
    Pertemuan 7 - 20 maret 2021
    Mempelajari mengenai GET & POST 
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Selamat Datang <?= $_POST["nama"]?></h1>
<?php endif; ?>

<form action="" method="post">
    Masukan Produk:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>

    
</body>
</html>