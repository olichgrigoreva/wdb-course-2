<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
//echo "<pre>";
//print_r($_REQUEST);
$connection = mysqli_connect("localhost", "root", "virtual", "katasonova");
 if(!empty($connection)) {
   $query='SELECT * FROM calcul ORDER BY id DESC LIMIT 5';
   $result=mysqli_query($connection, $query)or die("Ошибка " . mysqli_error($link));
   if (mysqli_num_rows($result)>0){
   while ($row = mysqli_fetch_assoc($result)){
    $sqlnum1=$row["num1"];
    $sqloperator=$row["operator"];
    $sqlnum2=$row["num2"];
    $sqlresult=$row["result"];
    echo "$sqlnum1 $sqloperator $sqlnum2  = $sqlresult"."<br>";
}}
//echo "<pre>";
//print_r($result);
//echo "<pre>";
}
$calcResult = "";
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
 $calcul = calcul($_REQUEST["num1"], $_REQUEST["operator"], $_REQUEST["num2"]);
//      echo  $calcul;
 $num1=$_REQUEST["num1"];
 $operator=$_REQUEST["operator"];
 $num2=$_REQUEST["num2"];
     $calcul = calcul($num1, $operator, $num2);
     if(!empty($connection)) {
       $insertQuery=mysqli_query($connection, "INSERT INTO calcul(num1, operator, num2, result)
         VALUES('$num1', '$operator', '$num2', '$calcul')");
       mysqli_query($connection, $insertQuery);
     }
   }
?>

<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="calcul.css">
    <h1 class="display-4">Калькулятор</h1>
</head>
<body>
<form method="POST" class="form">
    <input class="size btn btn-info" type="text" name="num1"/><br>
    <select class="size btn btn-warning" name="operator">
        <option disabled>выбрать действие</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select><br>
    <input class="size btn btn-info" type="text" name="num2"/><br>
    <input class="size btn btn-primary" type="submit" name="submit" value="Pешить"/><br>
    <div> Pезультат = <?php echo $calcul; ?> </div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
