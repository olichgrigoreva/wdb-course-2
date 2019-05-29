<?php
$val_1= $_REQUEST["val1"];
$val_2= $_REQUEST["val2"];
// echo "111";

 if(!empty($_REQUEST["submit"])){
    
    if(!empty($_REQUEST["plus"])){
        $result = $val_1 + $val_2;
        echo $result;
    };
   
    if(!empty($_REQUEST["minus"])){
        $result = $val_1 - $val_2;
         echo $result;
    };
}
echo $result;
    // if(!empty($_REQUEST["ymnogit"])){
    //     $result = push_ymnogit($val_1,$val_2);
    //      echo $result;
    // };
    
    // if(!empty($_REQUEST["delit"])){
    //     $result = push_delit($val_1,$val_2);
    //      echo $result;
    // };
 // echo "Hi". $result;
?>
