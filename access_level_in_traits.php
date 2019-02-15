<?php 

/*
    IN this we will learn how to access the private or protected function of traits

*/

trait t1
{
   private function testfunction(){
        echo "trait 1";
    }
}


class demo{
    use t1{
        t1::testfunction as public;
        //t1::testfunction as public ajay;

    }

}

$obj=new demo;
$obj->testfunction();


?>