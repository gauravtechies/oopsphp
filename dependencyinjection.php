<?php 

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