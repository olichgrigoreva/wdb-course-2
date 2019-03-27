<?php
ini_set("display_errors", 1); // 1
error_reporting(E_ALL);// 2

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

if($_REQUEST["Input_A"] !=="" || $_REQUEST["Input_B"] !=="" || $_REQUEST["Operation"] !=="") {
    $result = calc($_REQUEST["Input_A"],$_REQUEST["Input_B"],$_REQUEST["Operation"]); // 4 // 6.5
    echo $result;
}
else {
    $result = "Заполните все поля!";
    echo $result;
}





