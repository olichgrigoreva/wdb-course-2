<?php
ini_set("display_errors", 1); 
error_reporting(E_ALL);

    $val_1 = $_REQUEST["val1"];
    $val_2 = $_REQUEST["val2"];
    $result="";
    
    function plus ($val_1,$val_2){
        $operation = "plus" ;
        $result = $val_1 + $val_2;
        return $result;
    
    };
    
    function push_minus ($val_1,$val_2){
        $operation = "minus" ;
        $result = $val_1 - $val_2;
        return $result;
    
    };
    function push_ymnogit ($val_1,$val_2){
        $operation = "ymnogit" ;
        $result = $val_1 * $val_2;
        return $result;
    
    };
    function push_delit ($val_1,$val_2){
        if ($val_2 == 0 || $val_2 == "0"){
           $result = "You are OSLYA!!"; //  не работает, хз почему!!!
            return $result;
        }
        else{
        $operation = "delit" ;
        $result = $val_1 / $val_2;
        return $result;
        }
    };
   
    if(!empty($_REQUEST["plus"])){
        $result = push_plus($val_1,$val_2);
        
    };
   
    if(!empty($_REQUEST["minus"])){
        $result = push_minus($val_1,$val_2);
        
    };
    if(!empty($_REQUEST["ymnogit"])){
        $result = push_ymnogit($val_1,$val_2);
        
    };
    
    if(!empty($_REQUEST["delit"])){
        $result = push_delit($val_1,$val_2);
        
    };
       
    
?>

<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <meta charset="utf8"/>
        <link rel="stylesheet" href="calculator 4.css">
    </head>  
    <body>
        <form>
            <input class="pole" type"text" name="val1" placeholder=" введите число" />
            <input class="pole" type"text" name="val2" placeholder=" введите число" /> <br>
            <?php echo "Ответ:".$result; ?> <br>
            <hr>
            <button class="btn btn-success" type="submit" name="plus"  value="+" > + </button>
            <button class="btn btn-success" type="submit" name="minus" value="-" > - </button>
            <button class="btn btn-success" type="submit" name="ymnogit" value="*" > * </button>
            <button class="btn btn-success" type="submit" name="delit"  > / </button>
        </form>
    </body>

</html>

