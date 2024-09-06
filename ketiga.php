<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari; 
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari; 
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari; 
        $this->tinggi = $tinggi;       
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari; 
        $this->tinggi = $tinggi;       
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

$lingkaran = new Lingkaran(7);
$luas_lingkaran = $lingkaran->luas();
$keliling_lingkaran = $lingkaran->keliling();
echo "Luas lingkaran adalah: {$luas_lingkaran} cm²\n";
echo "Keliling lingkaran adalah: {$keliling_lingkaran} cm\n";

$bola = new Bola(5);
$volume_bola = $bola->volume();
echo "Volume bola adalah: {$volume_bola} cm³\n";

$tabung = new Tabung(4, 10);
$volume_tabung = $tabung->volume();
echo "Volume tabung adalah: {$volume_tabung} cm³\n";

$kerucut = new Kerucut(4, 10);
$volume_kerucut = $kerucut->volume();
echo "Volume kerucut adalah: {$volume_kerucut} cm³\n";