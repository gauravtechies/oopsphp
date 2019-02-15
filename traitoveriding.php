<?php 

/*In trait overriding first class will preference to its own class function after that trait function then to
base class*/

trait t1
{
    function testfunction(){
        echo "I am giving print from trait";
    }
}
class demo 
{
    function testfunction(){
        echo "I am giving demo";
    }
}
class demo1 extends demo{
    use t1;
}

$obj=new demo1;
$obj->testfunction();

?>