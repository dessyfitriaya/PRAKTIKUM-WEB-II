<?php 
    define("KONSTANTA", 1/3);

    function hitungVolume() {
        $sisi = 7.9;
        $tinggi = 5.4;
        $volume = pow($sisi, 2) * $tinggi * KONSTANTA;

        printf("%.3f", $volume);
    }
    hitungVolume();
?>