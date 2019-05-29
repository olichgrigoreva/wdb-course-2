<?php
$val_1= $_REQUEST["val1"];
$val_2= $_REQUEST["val2"];
$znak= $_REQUEST["name"];
// echo  test;
// echo $znak;

  if($znak=$_REQUEST["plus"] || $znak= "plus" ){
        $result = $val_1 + $val_2;
        echo "rabotaet cherez raz".$result;
      
       
    };
   
   if($znak=$_REQUEST["minus"] || $znak= "minus" ){
        $result = $val_1 - $val_2;
        echo "rabotaet cherez raz".$result;
      
       
    };if($znak=$_REQUEST["ymnogit"] || $znak= "ymnogit" ){
        $result = $val_1 * $val_2;
        echo "rabotaet cherez raz".$result;
      
       
    };if($znak=$_REQUEST["delit"] || $znak= "delit" ){
        $result = $val_1 / $val_2;
        echo "rabotaet cherez raz".$result;
      
       
    };
 // echo "Hi". $result;
?>