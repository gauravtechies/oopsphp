<?php 
/*Method overiding, Inheritance, public, private, protected, getter setter method
Encapsulation is an attribute of an object and it contains all data which is hidden 
that hidden data can be restricted to members of that class. 
Level are Public, private, protected

Public = It can accessed every where
private: It can accessed in same class
protected: It can used in class or in subclass

*/
/*Now if we want that no one can change the model so we have to give the private method  for that */
class AC{
     private $model="abc";
     private $speed=16;
     function getmodel(){
        echo $this->model;
     }
}
$ajay= new AC;
$ajay->getmodel();
/*We cannot directly access the model variable  nor can  change the /model */ 
?>

<?php 
/*Encapsulation
Concept of Encapsulation in PHP?
Encapsulation is an OOP (Object Oriented Programming) concept in PHP.
1) Wrapping some data in single unit is called Encapsulation. Encapsulation is used to safe data or information in an object from other it means encapsulation is mainly used for protection purpose.

2) In technology era, it is essential to maintain your privacy. So for the security reason,
 Sometime we make private method.
  
3) Private method means it can be accessed within same class. Outside,
  Class can't access private method of other class.That's why encapsulation is known as data hiding 
  is the main advantage for encapsulation.

4)Second advantage of encapsulation is you can make the class read only or write only by providing setter
 or getter method.

 5) Capsule is best example of Encapsulation. Capsule basically encapsulate several combination of medicines.
  Schoolbag is one of best example of Encapsulation. School bag can keep our books, pen etc.
6) So finally the concept of Encapsulation in PHP is hiding internal information of object to protect 
from the other object.*/


/* Getter setter method */
class Person{
    
    //The name of the person.
    private $name;
    
    //The person's date of birth.
    private $dateOfBirth;
    
    //Set the person's name.
    public function setName($name){
        $this->name = $name;
    }
    
    //Set the person's date of birth.
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }
    
    //Get the person's name.
    public function getName(){
        return $this->name;
    }
    
    //Get the person's date of birth.
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    
}


$person = new Person();
echo $person->name;

//Instantiate the Person object.
$person = new Person();

//Set the name to "Wayne"
$person->setName('Wayne');

//Get the person's name.
$name = $person->getName();

//Print it out
echo $name;
?>