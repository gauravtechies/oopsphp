<?php 
 #concept of classes and objects

 class AC
 {
     public $model="xyz";
     public $speed=15;

     function speedup()
     {
        $this->speed++;
        return $this->speed;
     }
     function speeddown()
     {
         return $this->speed--;
     }

    function __construct($model,$speed)
    {
        echo $this->model=$model."<br>";
        echo $this->speed = $speed ;   
    }
 }
 $voltasAc = new AC("voltas",22); # By making the class contructor will be automatically be called we donot use arror operator to call
 
 echo   $voltasAc->model="Voltas"; #acccessing the variable by making the object
 
 echo $voltasAc->speedup(); #Accessing the function in from class



 #Inheritance

 class SmartAC extends AC
 {
     public $wifi="Enabled";
     function __construct($a,$b){
         parent::__construct($a,$b);  #this is if we want to inherit the constructor of base class but if we donot want to call the constructor of base class the imply  made constructor
       
    }

 }

$smartAC= new SmartAC("Daikin",22);
echo $smartAC->model;
echo $smartAC->speed;
echo $smartAC->wifi;

?>