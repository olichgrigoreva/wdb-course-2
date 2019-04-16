<?php
ini_set("display_errors", 1); 
error_reporting(E_ALL);

class calc_5{
    
    function push_plus($val_1,$val_2){
        return $val_1 + $val_2;
    }
    
   function push_minys($val_1,$val_2){
        return $val_1 - $val_2;
    } 
    
    function push_ymnogit($val_1,$val_2){
        return $val_1 * $val_2;
    }
    
    function push_delit($val_1,$val_2){
        return $val_1 / $val_2;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

// $connect = mysqli_connect("localhost","root","","calculator_5");

// last_oper($connect);

// function last_oper($connect){
//     $last_operation = "SELECT * FROM calc_5 ORDER BY id DESC LIMIT 5";
//     $select_last= mysqli_query($connect, $last_operation);
//     $query= mysqli_fetch_assoc($select_last);
//     while (!empty($query)){
//         echo "<pre>";
//         print_r($query);
//         echo "<pre>";
//         $query= mysqli_fetch_assoc($select_last);
//     };
    
// }


// // $result="";



//   function push_plus ($val_1,$val_2,$connect){
//         $operation = "plus" ;
//         $result = $val_1 + $val_2;
//         $ins = "INSERT INTO calc_5(operation, operand_1, operand_2, result) VALUES ('$operation', '$val_1', '$val_2', '$result')";
//         // echo ($ins );
//         mysqli_query($connect,$ins) ;
//         $last_operation = "SELECT * FROM calc_5 ORDER BY id DESC LIMIT 5";
//         mysqli_query($connect, $last_operation);
//         return $result;         
//     };
    
//     function push_minus ($val_1,$val_2,$connect){
//         $operation = "minus" ;
//         $result = $val_1 - $val_2;
//         $ins = "INSERT INTO calc_5(operation, operand_1, operand_2, result) VALUES ('$operation', '$val_1', '$val_2', '$result')";
//         // echo ($ins );
//         mysqli_query($connect,$ins) ;
//         return $result;
        
//     };
//     function push_ymnogit ($val_1,$val_2,$connect){
//         $operation = "ymnogit" ;
//         $result = $val_1 * $val_2;
//         $ins = "INSERT INTO calc_5(operation, operand_1, operand_2, result) VALUES ('$operation', '$val_1', '$val_2', '$result')";
//         // echo ($ins );
//         mysqli_query($connect,$ins) ;
//         return $result;
    
//     };
//     function push_delit ($val_1,$val_2,$connect){
//         if ($val_2 == 0 || $val_2 == "0"){
//             $result = "You are OSLYA!!"; //  не работает, хз почему!!!
//             return $result;
//         }
//         else{
//         $operation = "delit" ;
//         $result = $val_1 / $val_2;
//         $ins = "INSERT INTO calc_5(operation, operand_1, operand_2, result) VALUES ('$operation', '$val_1', '$val_2', '$result')";
//         // echo ($ins );
//         mysqli_query($connect,$ins) ;
//         return $result;
//         }
//     };

//     if(!empty($_REQUEST["plus"])){
//       $val_1 = $_REQUEST["val1"];
//       $val_2 = $_REQUEST["val2"];
//       $result = push_plus($val_1,$val_2, $connect);
//     };
   
//     if(!empty($_REQUEST["minus"])){
//         $val_1 = $_REQUEST["val1"];
//         $val_2 = $_REQUEST["val2"];
//         $result = push_minus($val_1,$val_2,$connect);
        
//     };
   
//     if(!empty($_REQUEST["ymnogit"])){
//         $val_1 = $_REQUEST["val1"];
//         $val_2 = $_REQUEST["val2"];
//         $result = push_ymnogit($val_1,$val_2,$connect);
        
//     };
    
//     if(!empty($_REQUEST["delit"])){
//         $val_1 = $_REQUEST["val1"];
//         $val_2 = $_REQUEST["val2"];
//         $result = push_delit($val_1,$val_2,$connect);
        
//     };
       
}    
?>

