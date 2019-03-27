<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

function calc($a,$b,$op){

    if($op=="+"){ $result=$a+$b;
    }

    if($op=="-"){ $result=$a-$b;
    }

    if($op=="*"){ $result=$a*$b;
    }

    if($op=="/"){
	    if($b=="0"){
        $result = "На нуль делить нельзя!";	
	    }

	    else { $result=$a/$b;	
	    }
    }
    return $result;
    }

if($_REQUEST["Input_A"]=="" || $_REQUEST["Input_B"]=="" || $_REQUEST["Operation"]=="") {
    $result = "Заполните все поля!";
    echo $result;
}
else {
    $result = calc($_REQUEST["Input_A"],$_REQUEST["Input_B"],$_REQUEST["Operation"]);
    echo $result;
}





