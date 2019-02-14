<?php 
// we cannot call static function from dynamic function
class IRCTC
{
    public  static $count=0;
    
    static function getcount(){
       return self::$count;
    } 
    function __construct()
    {
      return  self::$count++;
    }
}
$obj=new IRCTC;
$obj1=new IRCTC;
$obj2=new IRCTC;
echo IRCTC::getcount();
?>