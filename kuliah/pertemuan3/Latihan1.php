<?php
/*
Akbar Maulana
203040136
https://github.com/akbarmauu/pw2021_203040136
pertemuan 3 - 18 Februari 2021
Mempelajari Variabel pada PHP
*/
?>
<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
// echo "hello world <br>";
// }
// $i = 0;
// while( $i < 5) {
// echo "Hello Wordl! <br>";
// $i++;
// }
// $i = 0;
// do {
//  echo "Hello World! <br>";
// $i++;
// } while($i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver; 
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <?php if( $i % 2 == 1 ) : ?>
        <tr class = "warna-baris">
    <?php else : ?>
        <tr>
    <?php endif; ?>
        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
            <td><?= "$i,$j"; ?></td>
        <?php endfor; ?>
        </tr>
            <?php endfor; ?>
    </table> 
</body>
</html>