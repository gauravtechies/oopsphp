<?php
/* 1) Agar hmare paas koi abstract method hai toh hum uska object nahi  bana saktae par hum usse 
extend kar sakte hai aur jo usme humne abstract function banaya usse hume apni drive class mein bhi banana padega
with same or less restricted and with same number of params. 

Abstract class mein hum normal function bhi bana sakte hai
aur iska best example hai shape class hume circle reactngle square sabka area calculate karna hai toh har class mein hume area wala function
 banana padega usko restrict karne ke liye shape wali class mein  abstract method bana do area ka

 abstract class mein normal function with defination(matlab jisme code likha hota hai ) aur without defination dono likh sakte hai

 Aur agar koi method abstract hai kisi class mein toh uski class bhi abstract honi chaiye  

 */
abstract class Employee
{
    protected $firstname;
    protected $lastname; 

    public function fullname(){  // Function with defination
        return $this->firstname.$this->lastname;
    }
    abstract function monthlysalary($d,$e); // Function without defination isme hum jabrdasti har extended class mein define karna padega

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