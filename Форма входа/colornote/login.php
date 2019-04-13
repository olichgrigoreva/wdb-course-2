<?php

require_once(User.php);

?>

<html>
    <head>
        <meta charset="utf8"/>
        <link rel="stylesheet" href="login.css"/>
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
                <button name="registr"  type="submit"   class="btn btn-info btn-lg " name="reg">Login</button>
                <button name="login"    type="submit"   class="btn btn-info btn-lg " name="log">Register</button>
            </form>
        </div>
        <div class="down">
            <p>Copyright by ... 2016</p>
        </div>
    </body>
</html>