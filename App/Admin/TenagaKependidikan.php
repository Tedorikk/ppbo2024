<?php

namespace App\Admin;
class TenagaKependidikan extends Pegawai
{
    public $gaji_pokok;
    public function cuti() {
        echo "{$this->nama} sedang cuti";
    }
}