<?php
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

function check($a, $b) {
    if(!is_numeric($a) || !is_numeric($b) || is_nan($a) 
    || is_nan($b)) {
        return false;
    }
}

function calc() {
    $res = 0;

    $firstNum = $_REQUEST["firstOperant"];
    $secondNum = $_REQUEST["secondOperant"];
    $operation = $_REQUEST["operation"];

    if(check($firstNum, $secondNum) === false) {
        return 'Enter the correct number!';
    }

    if($operation === '+') {
        $res = $firstNum + $secondNum;
    } else if ($operation === '-') {
        $res = $firstNum - $secondNum;
    } else if ($operation === '*') {
        $res = $firstNum * $secondNum;
    } else {
        $res = $firstNum / $secondNum;
    }

    return (is_infinite($res)) ? "Сannot be divided by zero":$res;
}

$result = (empty($_REQUEST["submit"])) ? 0:calc();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            padding-top: 200px;
        }
        form {
            margin: 0 auto;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 600px;
            height: 100px;
            border-radius: 10px;
            background-color: rgb(29, 224, 238);
        }

        div {
          margin: 10px;
        }

        input,
        select {
            border-radius: 5px;
            border: none;
            text-align: center;
        }

        .btn {
            margin-left: 55px;
            width: 160px;
            border-radius: 5px;
            background-color: beige;
            border: none;
        }

        .btn:hover {
            background-color: rgb(224, 224, 156);
        }

        .btn:active {
            background-color: rgb(217, 231, 91);
        }
    </style>
    <title>Calculator</title>
</head>
<body>
    <main>
        <form metod="POST">
            <input type="text" name="firstOperant" placeholder="enter the number" class = "first">
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="secondOperant" placeholder="enter the number" class = "second">
                <span>=</span>
                <span class = "result"><?php echo $result;?></span>
            <input type="submit" name = "submit" class = "btn">
        </form>
    </main>
</body>
</html>
