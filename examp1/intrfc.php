<?php
interface mobil{
public function warna();
}

class Camry implements mobil {
public function warna() {
echo "Hijau tosca";
}
}
class Tesla implements mobil {
public function warna() {
echo "<br> Vantablack";
}
}
class Brio implements mobil { 
public function warna() {
echo "<br> Blue dop";
}
}

$Camry = new Camry();
$Tesla = new Tesla();
$Brio = new Brio();
$mobil = array($Camry, $Tesla, $Brio);

foreach ($mobil as $mobil) {
$mobil->warna();
}
?>