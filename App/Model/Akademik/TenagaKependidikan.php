<?php

namespace App\Model\Akademik;
class TenagaKependidikan extends Pegawai
{
    public $gaji_pokok;
    public function cuti() {
        echo "{$this->nama} sedang cuti";
    }
}