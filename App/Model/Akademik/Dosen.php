<?php

namespace App\Model\Akademik;

class Dosen extends Pegawai
{
    public $nidn;
    public function mengajar() {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}