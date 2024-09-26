<?php
require_once 'vendor/autoload.php';

use App\Model\Akademik\Dosen;

$dian=new Dosen(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", "0013118405");
$dian->mengajar();

use App\Model\Akademik\Pegawai;
$dian=new Pegawai(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama");
$dian->getNoHp();