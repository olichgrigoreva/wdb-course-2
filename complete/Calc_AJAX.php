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
        $result = "division error by zero";	
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

$connection = mysqli_connect("localhost", "root", "virtual", "calc_base");
$a=$_REQUEST['Input_A'];
$op=$_REQUEST['Operation'];
$b=$_REQUEST['Input_B'];


$insert_query = "INSERT INTO result_table(Input_A, Operation, Input_B, result) VALUES($a, '$op', $b , '$result')";
mysqli_query($connection, $insert_query);





