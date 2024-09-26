<?php

namespace App\Model\Akademik;
class Pegawai{
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }
    public function cekIn(): bool {
        echo $this->nama . " berhasil cek in.<br>";
        return true;
    }

    public function cekOut(): bool {
        echo $this->nama . " berhasil cek out.<br>";
        return true;
    }

    protected function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp($no_hp): void {
        $this->no_hp = $no_hp;
    }
}

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;
    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }
    public function cuti(): void {
        echo $this->nama . " sedang cuti";
    }
}