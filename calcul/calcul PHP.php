<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

//echo "<pre>";
//print_r($_REQUEST);

function calcul($num1, $num2, $operator){
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $operator = $_REQUEST['operator'];

    if ($operator == '+'){
        $result = $num1 + $num2;
    }else if ($operator == '-'){
        $result = $num1 - $num2;
    }else if ($operator == '*'){
        $result = $num1 * $num2;
    }else if ($operator == '/'){
         if ($num2 !== 0) {
            $result = $num1 / $num2;
         }else{
            $result = "На 0 делить нельзя";
              }
    }
    return $result;
}
 if (!empty($_REQUEST["submit"]))  {
     $calcul = calcul($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["operator"]);
//     echo  $calcul;
 }
?>

<html>
<head>
    <meta charset="utf-8"/>
    <style>
        .size { width:100px;}
    </style>
</head>
<body>
<form method="POST">
    <input class="size" type="number" name="num1"/><br>
    <select class="size" name="operator">
        <option disabled>выбрать действие</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br>
    <input class="size" type="number" name="num2"/><br>
    <input class="size" type="submit" name="submit" value="Pешить"/><br>
</form>
Pезультат = <?php echo  $calcul;?>
</body>
</html>
