<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');  
$jam = date('H');      

if ($jam >= 19) {
    $sapaan = "Selamat malam";
} elseif ($jam >= 15) {
    $sapaan = "Selamat sore";
} elseif ($jam >= 11) {
    $sapaan = "Selamat siang";
} elseif ($jam >= 5) {
    $sapaan = "Selamat pagi";
} else {
    $sapaan = "Selamat malam";  
}

echo "{$sapaan}, {$nama}, sekarang pukul {$waktu}\n";