<?php

declare(strict_types=1);
abstract class Abstractfunction{
     abstract protected function Abstractfunction1();
     abstract public function Abstractfunction2();
}
class Abstractfunction3 extends Abstractfunction{
    function Abstractfunction1() : void 
    {
       echo "I am Shahid"."\n";
    }
    function Abstractfunction2() : void
    {
       echo "I am Farook"."\n";
    }
}
$varoon=new Abstractfunction3();
$varoon->Abstractfunction1();
$varoon->Abstractfunction2();
