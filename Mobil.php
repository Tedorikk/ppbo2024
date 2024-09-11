<?php

class Mobil {
    public $merk;
    public $warna;
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }
}

$mobilArdi = new Mobil("MCLaren","Silver");
$mobilRofi = new Mobil("Sedan", "HITAM");

echo "MCLaren Lo Warna Apa Bos????\n";

echo "MCLaren Gwe Warna {$mobilArdi->warna} Bos\n";