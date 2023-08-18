<?php
 
// buat class buku
class buku {
 
   // buat public property
   public $pemilik;
 
   // buat public method
   public function ambil_buku() {
     return "Tolong ambilkan Buku ku, gerxcep";
   }
}
  
// buat objek dari class buku (instansiasi)
$buku_nur = new buku();
  
// set property
$buku_nur->pemilik="Nur Anto";
  
// tampilkan property
echo $buku_nur->pemilik; // Anto
  
// tampilkan method
echo $buku_nur->ambil_buku(); // "ambilkan buku"
?>