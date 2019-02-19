<?php 
 #concept of classes and objects
// class contains structure, variable, feature, behaviours, methods 
// classs simple the collections of objects

 class AC
 {
     public $model="xyz";
     public $speed=15;

     function speedup()
     {
        $this->speed++; // by this way we can access the variable of same class
        return $this->speed;
     }
     function speeddown()
     {
         return $this->speed--;
     }

     // Constructor is used to initialize when the class is called 
     //Constructor is called every time when class is made 
     // We donot need to make the object for constructor
    function __construct($model,$speed)
    {
        echo $this->model=$model."<br>";
        echo $this->speed = $speed ;   
    }
 }
 $voltasAc = new AC("voltas",22); #By this we will call the class and voltas and 22 will go into the class and get defined automatically
 
 echo   $voltasAc->model="Voltas"; #acccessing the variable by making the object
 
 echo $voltasAc->speedup(); #Accessing the function  from class



 #Inheritance is getting all the property of base class and in ddrive class we will add some more properties

 class SmartAC extends AC
 {
     public $wifi="Enabled";
     function __construct($a,$b){
         parent::__construct($a,$b);  #this is if we want to inherit the constructor of base class but if we donot want to call the constructor of base class then simply  made constructor
       
    }

 }

$smartAC= new SmartAC("Daikin",22);
echo $smartAC->model;
echo $smartAC->speed;
echo $smartAC->wifi;

?>