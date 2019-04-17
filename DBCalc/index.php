
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Снова калькулятор</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div  style="text-align:center;">
      <h1> Калькулятор</h1>
  <?php
    $connection = mysqli_connect ("localhost", "root", "virtual", "Calc");
    //
    $query = mysqli_query($connection, "SELECT * FROM Calculator ORDER BY id desc LIMIT 5");

    function show_five_results ($first_number, $operand, $second_number, $result){
      while($id = mysqli_fetch_assoc($query)) {
        echo "<pre>";
        print_r($first_number $operand $second_number '=' $result);
        echo "</pre>";
      }
    }

    $first_number = $_REQUEST["first_number"];
    $operand = $_REQUEST["operand"];
    $second_number = $_REQUEST["second_number"];
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

        // mysqli_query($connection, $insert_query);
    function query ($connection, $insert_query){
      return mysqli_query ($connection, $insert_query);
    }
// /переделать резуьтат

    function fetch ($query){
      $result=[];
      while ($row = mysqli_fetch_assoc($query)) {
           $result[] = $row;
      }
      return $result;
    }
    $insert_query = "INSERT INTO Calculator (first_num, operation, second_num, result) VALUES('$first_number', '$operand', '$second_number', '$result')";
    query ("SELECT id,operand1,operation,operand2,result, date FROM result ORDER BY `id` DESC limit 5");
    $query=query($connection, );

    $fetch = $connection1->fetch($query);

                    $echores = new EchoClass();
                    $echores->echores($fetch);

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
            <?php
              echo $result;
            ?>
          </p>
          <p>
            ПОСЛЕДНИЕ ВЫЧИСЛЕНИЯ:
            <?php
              echo show_five_results;
            ?>
          </p>
        </p>
      </form>
    </div>
    </body>
</html>
