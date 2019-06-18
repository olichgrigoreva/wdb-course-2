<?php
session_start();
require_once("../classes/user.php");
require_once("../classes/auth.php");

$db= new database($connect);

if (!empty ($_REQUEST["Login"])) {
    
    login($username,$password);
}



?>

<html>
    <head>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="notes.css"/>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        
    </head>
    
    <body>
        <div class="up">
            <p>SUPER NOTEBOOK</p>
        </div>
        <div class="midle">
            <form class="pole"> 
                <input name="username"  type="text"     class="inp_form" placeholder="  Username"/>
                <input name="password"  type="password" class="inp_form" placeholder="  Password"/>
                <button name="login" type="submit"   class="btn btn-info btn-lg " >Login</button>
                <a class="btn btn-info btn-lg active " href="https://wdb-ilya-sosorev.c9users.io/New_work/colornote/registr_page/registr.html" >Register</a>
            </form>
        </div>
        <div class="down">
            <p>Copyright by ... 2016</p>
        </div>
    </body>
</html>