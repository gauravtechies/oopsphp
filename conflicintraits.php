<?php 

/*In trait overriding first class will preference to its own class function after that trait function then to
base class*/

trait t1
{
    function testfunction(){
        echo "trait 1";
    }
}
trait t2
{
    function testfunction(){
        echo "trait 2";
    }
}

class demo{
    use t1,t2{
        t1::testfunction insteadOf t2;
        t2::testfunction as vijay;

    }

}

$obj=new demo;
$obj->vijay();
$obj->testfunction();

?>