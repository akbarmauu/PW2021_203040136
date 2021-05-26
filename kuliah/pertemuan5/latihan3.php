<?php
/* 
    Akbar Maulana
    203040136
    https://github.com/akbarmauu/pw2021_203040136
    Pertemuan 5 - 16 maret 2021
    Mempelajari mengenai Array
*/
?>

<?php
$mahasiswa = [
    ["Akbar Maulana", "203040136", "TIF", "akbarmaumau12@gmail.com"],
    ["amar", "203040151", "TI", "amarsobri@gmail.com"],
    ["tegar", "203040152", "TM", "tegar123@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach ( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>