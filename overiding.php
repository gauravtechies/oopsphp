<?php
    
    //This is function overriding In this the function with same name is define in base and drive class

    /* And also there should be same number of parameter in both of the class suppose i pass  show with no parmeter
      in base class  then in drive class also there should be no params other wise it will give error
    */
    class Test {
        public function show(){
            echo "show is a function of test class";
        }
    }

    class Demo extends Test{
        public function show(){
            parent::Show();
            echo "show is function of demo class";
        }
    }

    $obj1=new Demo;
    $obj1->show();

    ?>

