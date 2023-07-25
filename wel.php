<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  public function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}
$apple = new Fruit ();
var_dump($apple instanceof Fruit)."<hr>";
$orange=new Fruit ();
$apple->set_name('Apple');
$apple->set_color('Red');
$orange->set_name("orange");
$orange->set_color('tangerine');
 echo "Name".":".$orange->get_name()."<br>";
 echo "Color".":" .$orange->get_color()."<br>";
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color()."<br>";

class Fruits {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."."<br>";
  }
}
class Strawberry extends Fruits {
  public function message() {
    echo "Am I a fruit or a berry? "."<br>";
    $this->intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message()."<br>";
class bikes{
  const dream="This is my BIke"."<br>";
  const hero="This is retro bike"."<br>";
  public function mybike(){
    echo self::hero;
  }
}
echo bikes::dream."<br>";
$no=new bikes();
$no->mybike();

 class building{
  public $height;
  public $width;
   public function __construct($height,$width){
    $this->height=$height;
    $this->width=$width;
  }
  final public function intro(){
    echo "{$this->height} and {$this->width}";
  }
}
class ashoka extends building{
  public $weight;
  public  function __construct($height,$width,$weight){
    $this->height=$height;
    $this->width=$width;
    $this->weight=$weight;
  }
 /* public function intro(){
    echo "{$this->height}and{$this->width}and{$this->weight}";
  }*/
}
$slab=new ashoka("45s","454s","66s");
$slab->intro();

abstract class CAR{
  public $name;
  public function __construct($name){
    $this->name=$name;
  }
   abstract public function intro():string;
}
class audi extends CAR{
  public function intro():string{
    return "this is {$this->name}";
  }

}
class bmw extends CAR{
  public function intro():string{
    return "This is {$this->name}";
  }
}
class chevrolet extends CAR{
  public function intro():string{
    return "This is {$this->name}";
  }
}
$audi=new audi("X5");
 echo $audi->intro()."<br>";
$bmw=new bmw("V6");
 echo $bmw->intro()."<br>";
$chevrolet=new chevrolet("cruze");
 echo $chevrolet->intro()."<br>";
?>