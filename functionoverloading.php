<?php 

/*Function Overloading: Function overloading contains same function name and that function preforms
 different task according to number of arguments. For example, find the area of certain shapes where 
 radius are given then it should return area of circle if height and width are given then it should give
  area of rectangle and others. Like other OOP languages function overloading can not be done by native approach.
   In PHP function overloading is done with the help of magic function __call(). This function takes function 
   name and arguments. */

class Test {
     public function __construct(){
         echo "Implement function overloading";
     }

     public function __call($name,$arguments){
       if ($name=="Overload")
         {
             
             $count=count($arguments);
             switch($count){
                 case "1":
                        echo "One Argument";
                    break;
                case "2":
                        echo "Two Argument";
                    break;
                case "3":
                        echo "Three Argument";
                    break;
                default:
                        echo "You have entered Invalid";
                    break;
             }

         }
     }
 }

 $obj1=new Test();
 $obj1->Overload("Gaurav","kamboj");
?>