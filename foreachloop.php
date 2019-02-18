<?php
function test(array $arr){  //here we are specifying that it's array if we donot pass the array it will give the fatal array and fatal error means the program is not compiled 
    echo  "<table border=2>";
    foreach($arr as $k=>$i){
        echo "<tr><td>$k</td><td>$i</td></tr>"; 
    }
    echo "</table>";
}
$arr=array("abc"=>"123","def"=>"456");
?>
