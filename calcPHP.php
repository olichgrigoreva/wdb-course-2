<?php
ini_set("display_errors", 1); // 1
error_reporting(E_ALL);// 2

function calc($a,$b,$op){

    if($op=="+"){ $result=$a+$b;
    }

    if($op=="-"){ $result=$a-$b;
    }

    if($op=="*"){ $result=$a*$b;
    }

    if($op=="/"){
	    if($b=="0"){
        $result = "На нуль делить нельзя!";	
	    }

	    else { $result=$a/$b;	
	    }
    }
    return $result;
    }


if (!empty($_REQUEST["calculate_button"])) {
    $result = calc($_REQUEST["Input_A"],$_REQUEST["Input_B"],$_REQUEST["Operation"]); // 4 // 6.5
    //echo $result; // 7ф
    }

?>

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

    <title>Calc PHP</title>
  </head>

  <body>
    <header>    </header>
    <div class="container">
    <section>
       <form class="input_fields" method="POST">
          <legend><h1>Simple calc</h1></legend>
          <div>
            <input type="number" class="first_digit" name="Input_A" placeholder="Input A">
          </div>
          <div>
            <select name="Operation" Operation class="btn btn-dark active">
                <option value="">Select operation</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
          </div>
          <div>
            <input type="number" class="second_digit" name="Input_B" placeholder="Input B">
          </div>
          <input name="calculate_button" type="submit" class="btn btn-dark" value="Calculate">
        </form>

      
      <fieldset>
        <legend><h2>Calculated result</h2></legend>
        <output name="result"><?php echo $result;?></output>
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