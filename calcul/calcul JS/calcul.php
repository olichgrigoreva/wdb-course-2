<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

// echo "<pre>";
// print_r($_REQUEST);

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$operator = $_REQUEST['operator'];


if ($operator == '/') {
    if ($num2 == 0) {
        echo "На 0 делить нельзя";
    }
    else if ($num2 >0) {
        echo $num1 / $num2;
    }
}

else if ($operator == '*') {
    echo $num1 * $num2;
}
else if ($operator == '-') {
    echo $num1 - $num2;
}
else if ($operator == '+') {
    echo $num1 + $num2;
}

?>
