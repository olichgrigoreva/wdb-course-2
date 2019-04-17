
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

  require_once("markup.php");
  $first_number = $_REQUEST["first_number"];
  $operand = $_REQUEST["operand"];
  $second_number = $_REQUEST["second_number"];

  $form_calc = new markup();
  $form_calc ->calc_form($first_number, $operand, $second_number);


  $count = new markup($result);
  $count -> calc_count();


  echo $result;

  ?>
    </div>
    </body>
</html>
