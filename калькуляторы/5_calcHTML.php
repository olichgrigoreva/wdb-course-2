<?php
require_once("5 calc.php");
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
            <button class="btn btn-success btn-inline" type="submit" name="plus"  value="+" > + </button>
            <button class="btn btn-success btn-inline" type="submit" name="minus" value="-" > - </button>
            <button class="btn btn-success btn-inline" type="submit" name="ymnogit" value="*" > * </button>
            <button class="btn btn-success btn-inline" type="submit" name="delit" value="/" > / </button>
        </form>
    </body>

</html>
