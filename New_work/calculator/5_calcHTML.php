<?php
require_once("5 calc.php");
require_once("Database calc_5.php");


$db=new Database(calculator_5);

$val_1=$_REQUEST["val1"];
$val_2=$_REQUEST["val2"];
$oper = $_REQUEST["operation"];
$result="";

$calc_5 = new Calc_5();

    if ($oper == "+"){
        return $result=$calc_5-> push_plus($val_1,$val_2);
    }
   
?>

<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <meta charset="utf-8">
        <link rel="stylesheet" href="calculator 4.css">
    </head>  
    <body>
        <form>
            <input class="pole" type="text" name="val1" placeholder=" enter number" />
            <input class="pole" type="text" name="val2" placeholder=" enter number" /> <br>
            <?php echo "Otvet:".$result;?> <br>
            <hr>
            <button class="btn btn-success btn-inline" type="submit" name="operation"  value="+" > + </button>
            <button class="btn btn-success btn-inline" type="submit" name="operation" value="-" > - </button>
            <button class="btn btn-success btn-inline" type="submit" name="operation" value="*" > * </button>
            <button class="btn btn-success btn-inline" type="submit" name="operation" value="/" > / </button>
        </form>
    </body>

</html>
