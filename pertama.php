<?php
date_default_timezone_set("Asia/Jakarta");
$nama =readline("Masukkan Nama Anda: ");
$waktu = date('H:i');

$sapaan = idate('H');
if ($sapaan >= 5 && $sapaan < 12) {
    echo "Selamat Pagi, {$nama}, Sekarang Pukul {$waktu}\n";
} elseif ($sapaan >= 12 && $sapaan < 15) {
    echo "Selamat Siang, {$nama}, Sekarang Pukul {$waktu}\n";
} elseif ($sapaan >= 15 && $sapaan < 18) {
    echo "Selamat Sore, {$nama}, Sekarang Pukul {$waktu}\n";
} elseif ($sapaan >= 18 && $sapaan < 24) {
    echo "Selamat Malam, {$nama}, Sekarang Pukul {$waktu}\n";
} else {
    echo "Selamat Malam, {$nama}, Sekarang Pukul {$waktu}\n";
}
