<?php
function getFlower():iterable {
  return ["Sunflowers <hr>", "Jasmine <hr>", "Tulip <hr>", "Rose<hr>", "Lavender<hr>", "Waterlily<hr>", "Daisy<hr>", "Aster<hr>", "Lotus<hr>", "Lilac<hr>", "Ixora<hr>", "Bougainvillea<hr>", 
  "Sakura<hr>", "Iris<hr>", "Gypsophia<hr>", "Gloriosa<hr>", "Peony<hr>", "Orchid<hr>", "Violet<hr>", "Camellia</hr>"];
}

$myFlower = getFlower();
foreach($myFlower as $item) {
  echo $item;
}
?>