<?php
class buku{
//ini property
public $judul;
public $pengarang;
//ini method
function set_judul($judul){
$this->judul = $judul;
}
function get_judul(){
return $this->judul;
}
}
$eljija = new buku();
$DilanMulyono = new buku();
$eljija-> set_judul('Eljija');
$DilanMulyono-> set_judul('DilanMulyono');

echo $eljija-> get_judul();
echo "<br>";
echo $DilanMulyono-> get_judul();
?>