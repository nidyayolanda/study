<!--ini percabangan-->
<?php
$t = date ("H");
if ($t< "20"){
    echo " have a good day! <br>";
}
else{
    echo " have a good night!";
}
?>
================ ini percabangan ==================</br> 

<!-- ini perulangan-->
<?php
$matauang = array ("Rupiah", "Dollar","Ringgit","Bath","Real");
foreach ($matauang as $value)
{
    echo "$value <br>";
}
?>
================ ini perulangan ==================</br>  

<!-- ini perpindahan -->
<?php
for ($x = 1; $x < 10 ; $x++){
    if ($x == 6){
    break;
}
echo "ini ayamku ke: $x <hr>";
}
?>
================ ini perpindahan ==================</hr>  

<!-- ini function -->
<?php
function Heroname ($hname)
{
    echo "$hname Goldlane. <br>";
}
Heroname ("<br> Miya");
Heroname ("Gusion");
Heroname ("Beatrix");
Heroname ("Kimmy");
Heroname ("Bruno");
?>

================ ini function ==================</br>  
<!-- ini array -->

<?php
$fruit = array("Apel", "Anggur", "Tomat","Terong","Talas","Pisang","Nanas","Chery","Leci","Rambutan","Melon","Kiwi");
echo count($fruit) ;
?>
<br>
================ ini array ==================</br> 