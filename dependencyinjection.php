<?php 
/*Dependency injection is design pattern, its new way to avoid extend  ek class ka object banakar doosri class mein
pass karne ko bolte hai dependency injection*/
//oops dependency injection 
class logger{
    public function log($message){
        echo "logging message : ". $message. "<br>";
    }
}

class userinfo{
    private $logger;
    public function Createuser(){
       
        $this->logger->log("user created");
    }
    public function updateuser(){
        $this->logger->log("user updated");

    }
    public function __construct(logger $logger1){
        $this->logger=$logger1; 
       
    }
}
    $logger1 = new logger();
    $ajay=new userinfo($logger1);
     $ajay->Createuser();
     $ajay->updateuser();
?>