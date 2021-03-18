<?php
/* 
Akbar Maulana
203040136
Jumat 13:00
*/

?>
<?php
    $daftarpesepakbolaterkenal = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymay jr"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3b</title>
</head>
<body>
    <h4>Daftar pemain bola terkenal</h4>
    <ol> 
        <?php
            foreach ($daftarpesepakbolaterkenal as $orang) : ?>
                <li><?= $orang; ?></li>
            <?php endforeach; ?>
    </ol>
    
    <?php

    $daftarpesepakbolaterkenal[] = "Luca Modric";
    $daftarpesepakbolaterkenal[] = "Sadio Mane";

    sort($daftarpesepakbolaterkenal);

    ?>

    <h4>Daftar pemain bola terkenal baru</h4>
    <ol>
        <?php foreach ($daftarpesepakbolaterkenal as $orang) : ?>
            <li><?= $orang; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>