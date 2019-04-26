<?php
    include_once('session.php');
    $session = new authorize;
    $session->open();
    if (!$session->checkEq()) die;


    require __DIR__.'/HTMLheader.php';

    echo('<script type="text/javascript" src="register.js"></script>');
    $str = '<script>'.'regFormJS.createPage('.$_REQUEST["username"].','.$_REQUEST["pass1"].');</script>';
    echo($str);

    require __DIR__.'/HTMLfooter.php';

        $str = '<script>regFormJS.createPage.iButtonSubmit.addEventListener("Click", regFormJS.doFormSubmit2(event));</script>';
//        echo($str);

    die;
?>