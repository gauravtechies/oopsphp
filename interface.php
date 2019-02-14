<?php 
    //We cannot use variable in interface 
    // The function we define in interface donot have defination 
    // we can use only public in interface 
    interface A
    {
        function Demo(); 
    }
    
    interface B
    {
        function Demo1();
    }


    class grandparents implements A,B{
        public function Demo(){
            //Code here
        }

        public function Demo1(){
            //Code here
        }
    }