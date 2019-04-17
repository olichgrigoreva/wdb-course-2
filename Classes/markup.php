<?php
class markup {
  function calc_form(){
?>
      <form name="calc" method="post">
      <p>
        <input type="text" name="first_number" title="Введите первое число">
        <input type="text" name="second_number" title="Введите второе число">
      </p>
      <p>
        <select title="Выберите действие" name="operand">
          <option value="plus">+</option>
          <option value="minus">-</option>
          <option value="multiply">*</option>
          <option value="divide">/</option>
        </select>
      </p>
      <p>
        <input type="submit" value="Посчитать">
      </p>
      <p>
        РЕЗУЛЬТАТ<p name="res">

        </p>
      </p>
    </form>
<?php
  }
}
 ?>
<?php
function calc_count($first_number, $operand, $second_number){

     if ($operand == "plus"){
         $result = $first_number + $second_number;      }
     if ($operand == "minus"){
         $result = $first_number - $second_number;
     }
     if ($operand == "multiply"){
        $result = $first_number * $second_number;
     }
     if ($operand == "divide"){
         $result = $first_number / $second_number;
     }
     return $result;
}
 ?>
