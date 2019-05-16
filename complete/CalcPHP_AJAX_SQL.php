<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="calc.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script>
    function calculate(event) {
      event.preventDefault();
      let input_data = document.querySelector("form");
      fetch("/Calc_AJAX.php", {
        method: "POST",
        body: new FormData(input_data)
      })
      .then(response => {
      return response.text();
      })
      .then(text => {
        document.querySelector("output").innerHTML = text;
      });
    }
    </script>

    <title>Calc PHP</title>
  </head>

  <body>
    <header>    </header>
    <div class="container">
    <section>
       <form class="input_fields">
          <legend><h1>Simple calc</h1></legend>
          <div>
            <input type="number" class="first_digit" name="Input_A" placeholder="Input A">
          </div>
          <div>
            <select name="Operation" Operation class="btn btn-dark active">
                <option name="Operation" value="">Select operation</option>
                <option name="Operation" value="+">+</option>
                <option name="Operation" value="-">-</option>
                <option name="Operation" value="*">*</option>
                <option name="Operation" value="/">/</option>
            </select>
          </div>
          <div>
            <input type="number" class="second_digit" name="Input_B" placeholder="Input B">
          </div>
          <input onclick="calculate(event)" name="calculate_button" type="button" class="btn btn-dark" value="Calculate">
        </form>

      
      <fieldset>
        <legend><h2>Calculated result</h2></legend>
        <output name="result">0</output>
      </fieldset>
      <fieldset>
        <legend><h2>Last 5 results</h2></legend>
      <output name="last_results">
        <?php
        $connection = mysqli_connect("localhost", "root", "virtual", "calc_base");
        $query = mysqli_query($connection, "SELECT * FROM result_table ORDER BY id DESC LIMIT 5 ");
        while($last_results = mysqli_fetch_assoc($query)) {
        echo "<pre>";
        print_r($last_results);
        echo "</pre>";
        }
        ?>
      </output>
    </fieldset>
    </section>
    </div>
    <footer>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>