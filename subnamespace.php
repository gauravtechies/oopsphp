<?php 
namespace herirachy\MyNamspaceName;


    class xyz{

        public function __construct(){
            echo "xyz class from MyNamspaceName namespace";
        }
      
        function hello() 
        { 
            echo 'Hello I am function and running from a namespace!'; 
        } 

    
	
    }
    use herirachy\MyNamspaceName\xyz;
    $obj=new xyz();



