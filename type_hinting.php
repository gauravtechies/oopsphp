<?php 
interface show
{
    function hii();
}
class ABC implements Show
{
        public function hii(){
            echo "this is hii from ABC class";
        }
        
}
class XYZ implements Show
{
        public function hii(){
            echo "this is hii from XYZ class";
        }
        
}
/*This is type hinting we are passing XYZ class in Function so it check the hii 
in only XYZ class not in ABC it will give the fatal error  Argument 1 passed to Test() 
must be an instance of XYZ, instance of ABC given,    */


/*It will simply give error if it found object of another class and type hinting of another  class*/
function Test(ABC $obj1){
    $obj1->hii();
}
$obj1=new ABC;
Test($obj1);
?>