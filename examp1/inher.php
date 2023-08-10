
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "<br> Betul ini tu buah {$this->name} dia tuh kicik-kicik berwarna {$this->color}."; 
  }
}

// Strawberry is inherited from Fruit
class Grape extends Fruit {
  public function message() {
    echo "apakah saya buah "; 
  }
}
// ini inheritance
$Grape = new Grape("anggurrr", "unguuuu");
$Grape->message();
$Grape->intro();
?>

