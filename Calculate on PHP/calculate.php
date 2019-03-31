<?php
 ini_set("display_errors", 1); // 1
 error_reporting(E_ALL);// 2

 

function calculate ($operand1, $operand2, $operation) {
       
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

      return $result;

}
if(!empty($_REQUEST["submit"])) {
   
  $calculate = "Result = ".calculate ($_REQUEST["operand1"], $_REQUEST["operand2"], $_REQUEST["operation"]);
}

?>
<!-- <?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?> -->
<html>
  <head>
  </head>
  <body>
    

    <form>
      <input type="number" name="operand1" placeholder="Operand1">
        <select name="operation">
          <option value=""> Select operation </option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="/">/</option>
          <option value="*">*</option>
        </select>
      <input type="number" name="operand2" placeholder="Operand2">
      <input type="submit" name="submit" value="Calculate">
    </form>
    <?php echo $calculate;?>
  </body>
</html>