<?php
 ini_set("display_errors", 1); // 1
 error_reporting(E_ALL);// 2 
       
       $operand1 = $_REQUEST["operand1"];
       $operand2 = $_REQUEST["operand2"];
       $operation = $_REQUEST["operation"];

       if ($_REQUEST["operand1"]==NULL) {
        $result="Fill in all the fields";
      }

      else if ($_REQUEST["operation"]=NULL) {
        $result="Fill in all the fields";
      }

      else if ($_REQUEST["operand2"]==NULL) {
        $result="Fill in all the fields";
      }

      else if ($operation == "+"){
        $result = $operand1 + $operand2;
      }

      else if ($operation == "-"){
        $result = $operand1-$operand2;
      }

      else if ($operation == "*"){
        $result = $operand1*$operand2;
      }

      else if ($operation == "/"){
        if ($operand2 == 0){
          $result="Invalid operation with zero";
        }
        else{
          $result = $operand1/$operand2;
        }
      }  

      echo $result;
?>