<?php
class Fruits {
  public $name;
  public $color;

  function set_name($name): void
  {
    $this->name=$name;
  }

  function get_name(): string
  {
    return $this->name;
  }

  function set_color($color): void
  {
    $this->color=$color;
  }

  function get_color(): string
  {
    return $this->color;
  }
}

$apple=new Fruits("apple","red");
$apple->set_name("apple");
$apple->set_color("red");
echo $apple->get_name()."<br>";
echo $apple->get_color()."<br>";
?>