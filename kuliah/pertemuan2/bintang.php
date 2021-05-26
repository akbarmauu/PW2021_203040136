<?php 
function cetak_bintang($angka)
    {
        for ($a = 1; $a <= $angka; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>

    <?= cetak_bintang(7); 

?>