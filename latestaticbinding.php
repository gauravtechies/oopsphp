<?php

class BaseDemo
{
    protected static $table="BaseDemo";
    
    public function select(){
        echo "select * from ". static::$table;
    } 
    public function insert(){
        echo "Insert into  * from ". static::$table;
    } 
}

class Student extends BaseDemo{
    protected static $table ="student";
}
class Books extends BaseDemo{
    protected static $table ="books";
}
 $student = new Student;
 $Books = new Books;
echo $student->select()."<br>";
echo $Books->select()."<br>";

echo $student->insert()."<br>";
echo $Books->insert()."<br>";
 ?>
