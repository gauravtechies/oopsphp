<?php 
/*
Like C++, PHP Namespaces are the way of encapsulating items so that same names can be reused without name conflicts.
It can be seen as an abstract concept in many places. It allows redeclaring the same 
functions/classes/interfaces/constant functions in the separate namespace without getting the fatal error.
    A namespace is a hierarchically labeled code block holding a regular PHP code.
    A namespace can contain valid PHP code.
    Namespace affects following types of code: classes (including abstracts and traits), interfaces, functions, and constants.
    Namespaces are declared using the namespace keyword.
*/

 /* outside the namespace we can't access the object, we need the another namespace 
 and we have write the namespace on the top of the file */
namespace MyNamspaceName { 
    class xyz{

        public function __construct(){
            echo "xyz class from MyNamspaceName namespace";
        }
        public function show(){

        }
        function hello() 
        { 
            echo 'Hello I am function and running from a namespace!'; 
        } 

    } 
	// Regular PHP code 
	
} 


namespace { 

    // Global space! 
    class xyz //Global class can be accessed anywhere
    {
        public function __construct(){
            echo "hello i am from xyz class";
        }
    }
    // we can also call name by use 
        use MyNamspaceName\xyz as demo; 
        $obj2= new demo();  //Firstmethod to call 

    $obj1=new MyNamspaceName\xyz;  //second method This is how we call namespace 
    $obj1->hello();
} 


 


?>