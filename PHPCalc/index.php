<!DOCTYPE html>
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

      <form class="" action="index.html" method="post">
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
          <input type="button" name="btn" value="Показать результат" onclick="calc()">
        </p>
        <p>
          РЕЗУЛЬТАТ<p name="res"></p>
        </p>
        </form>
    </div>
    </body>
</html>
