<?php
abstract class Employee
{
    protected $firstname;
    protected $lastname; 

    public function fullname(){
        return $this->firstname.$this->lastname;
    }
    abstract function monthlysalary($d,$e);

    public  function __construct($a,$b)
    {
        $this->firstname=$a;
        $this->lastname=$b;
    }
}
class FullTimeEmployee extends Employee
{
   
    protected $annualsalary;
    
    public function monthlysalary($annualsalary,$month){
        return $annualsalary/$month;
    }
   
}

class PartTimeEmployee extends Employee
{
  
    protected $hourrate;
    protected $hour;


    public function monthlysalary($hourrate,$hour){
        return $hourrate* $hour*78;
    }
   

}

$obj= new PartTimeEmployee("Part","Time");
echo $obj->fullname();
echo $obj->monthlysalary(6,40);


$obj1= new FullTimeEmployee("Full","TIme");
echo $obj1->fullname();
echo $obj1->monthlysalary(10000,12);



?>