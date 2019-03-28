<?php
	ini_set("display_errors", 1);
	error_reporting(E_ALL);
		function calculate($num1,$num2,$operation){
    			if($operation =="+"){
			$result=$num1+$num2;
    			}
   			if($operation =="-")
			{ 
			$result=$num1-$num2;
    			}
    			if($operation=="*"){
			$result=$num1*$num2;
    			}
    			if($operation=="/"){
	   			if($num2=="0"){
        		$result = "False";	
	   		 	}
	    		else{
			$result=$num1/$num2;	
	   		}
  			}
    			return $result;
   		 }
			if($_REQUEST["First_number"]=="" || $_REQUEST["Second_number"]=="" || $_REQUEST["operation"]=="") {
    			$result = "False";
    			echo $result;
			}
				else{
    				$result = calculate($_REQUEST["First_number"],$_REQUEST["Second_number"],$_REQUEST["operation"]);
    			echo $result;
				}
?>