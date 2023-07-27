<?php

declare(strict_types=1);

interface Interfacefunction{
    public function Interfacefunction1();

}
interface Interfacefunction2{
    public function Interfacefunction3();
}
class Interfacefunction4 implements Interfacefunction{
    function Interfacefunction1() : void
    {
       echo "This is PHP Single Inheritance"."\n";
    }
}
class Interfacefunction5 implements Interfacefunction,Interfacefunction2{
    function Interfacefunction1() : void
    {
       echo "This is PHP ";
    }
    function Interfacefunction3() : void
    {
       echo "Multiple Inheritance"."\n";
    }
}
$_0=new Interfacefunction4();
$_0->Interfacefunction1();
$_1=new Interfacefunction5();
$_1->Interfacefunction1();
$_1->Interfacefunction3();
