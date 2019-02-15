<?php 

/*In trait if we use two function with same name it will give error then we can use following method to overcome that problem */

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