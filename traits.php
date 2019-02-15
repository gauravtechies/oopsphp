<?php 

        /*oops concepts in php (traits)*/
    /*We have seen the problem in inheritance that we cannot inherit the multiple classes*/

    class demo{

    }
    
    trait demotrait {
        function getReturnType() { 
            echo "this is first function trait";
         }
        function getReturnDescription() { 
            echo "this is second function of trait";
         }
    }
    
    class ezc extends demo {
        use demotrait;
        
    }
    
   
    
    $obj= new ezc();
    $obj->getReturnType();
    $obj->getReturnDescription();
    // print_r(get_declared_classes());
    ?>
    