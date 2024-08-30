<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;
    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasiTumpeng = new Kerucut();
$nasiTumpeng->jari_jari = 4;
$nasiTumpeng->tinggi = 10;
$volumeNasiTumpeng = $nasiTumpeng -> volume();

echo "volume nasi tumpeng yaitu {$volumeNasiTumpeng}";

$bola = new Bola();
$bola->jari_jari = 7;
$volumeBola = $bola->volume();

echo "\nVolume bola adalah {$volumeBola}";

// Implementasi Tabung
$tabung = new Tabung();
$tabung->jari_jari = 5;
$tabung->tinggi = 15;
$volumeTabung = $tabung->volume();

echo "\nVolume tabung adalah {$volumeTabung}";