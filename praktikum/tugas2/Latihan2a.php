<?
/*
    AKBAR MAULANA
    203040136
    JUMAT, 13.00

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2A</title>
    <style>
    .style1 {
        width: 50%;
        margin: auto;
        border: 2px solid black;
        border-radius: 5px;
    }

    .style2 {
        font-size: 28px;
        font-family: arial;
        font-style: italic;
        font-weight: bolder;
        margin-left: 15px;
        color: #8c782d;
    }
    </style>
</head>
<body>
    <?php

    function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2")
    {
        return "<div class=$style1><p class=$style2>$tulisan</p></div>";
    }
    echo gantiStyle("Selamat Datang di praktikum PW");
    ?>
</body>
</html>