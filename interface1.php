<?php 
// one thing many form
//can be used with interface or abstract class

interface Shape
{
    public function calArea();   
}

class Circle implements Shape{
    private $radius;
    public function calArea(){
       return  2*3.14*$this->radius; 
    }  
    public function __construct($a){
        $this->radius=$a;
    }
}

class Rectangle implements Shape{
    private $length;
    private $breath;
    public function calArea(){
        return  $this->length *$this->breath; 

    }  
    public function __construct($a,$b){
        $this->length=$a;
        $this->breath=$b;
    }
}

$rectangle=new Rectangle(24,34);
echo $rectangle->calArea()."<br>";
$circle=new Circle(24);
echo $circle->calArea();

?>