<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}


$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";

function kelilinglingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

$keliling_tanah = kelilingLingkaran(45);
echo "Keliling tanah Budi adalah {$keliling_tanah}";

function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * pow($jari, 3);
    return $volume;
}

$volume_bola = volumeBola(45);
echo "Volume bola dengan jari-jari 45 adalah {$volume_bola}";

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

$volume_tabung = volumeTabung(45, 100);
echo "Volume tabung dengan jari-jari 45 dan tinggi 100 adalah {$volume_tabung}";

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * pow($jari, 2) * $tinggi;
    return $volume;
}

$volume_kerucut = volumeKerucut(45, 100);
echo "Volume kerucut dengan jari-jari 45 dan tinggi 100 adalah {$volume_kerucut}";
