<?php
//Method chaining
class ABC
{
    function fun1(){
        echo "fun1 from abc class <br>";
        return $this;
    }
    function fun2(){
        echo "fun2 from abc class <br>";
        return  $this;
    }
    function fun3(){
        echo "fun3 from abc class";
        return $this;
    }

    /*Now if we want to access all the three functions fun1 fun2 fun3 
    we cannot access diectly like 
    $obj1= new ABC;
    $obj1->fun1()->fun2()->fun3();
    Now this will give error as it will give only output for fun1


    For correcting this we will use method chaining In method chaining 
    we make function fun1 as object means we will write return $this;
    and it will return as object ;

    we can check type by var_dump
    */
  
}
$obj1=new ABC;
$obj1->fun1()->fun2()->fun3();
?>