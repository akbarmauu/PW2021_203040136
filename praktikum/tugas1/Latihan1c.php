<?php
/* 
Akbar Maulana
203040136
Jumat 13:00
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1C</title>
    
    <style>
    .circle {
        background-color: salmon;
        height: 50px;
        width: 50px;
        line-height: 50px;
        text-align: center;
        margin-bottom: 3px;
        border-radius: 50px;
        display: inline-block;
        border: 2px solid black;
        font-weight: bold;
    }
    .container {
        margin-right : 80%;
        padding: 10px;
        border : 2px solid black;
    }
    </style>
</head>
<body>
    <div class="container">
        <?php for( $i = 1; $i <=3; $i++ ) : ?>
            <?php for( $j = 1; $j <=$i; $j++) : ?>
                <div class="circle"> <?= $i ?></div>
            <?php endfor; ?>
            <br>
        <?php endfor;?>
    </div>  
</body>
</html>