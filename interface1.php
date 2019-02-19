<?php 
/* 1) Interface is the best way to achieve the abstraction 
2) Interface mein only function without defination use karte hai
3) isme extends nhi hota isme implements hota hai 
4)jaise niche example mein  humne calArea define kardiya toh har drive class mein claArea hona chaiye
5)Hum Interface mein  variable bhi nhi bana sakte 
6) inteface.php mein multiple inteface ko ek class mein use kiya hai
7)hum interface mein sirf public method use karte hai
*/
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