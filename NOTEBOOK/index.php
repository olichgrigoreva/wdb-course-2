<?php
    include_once('session.php');
    $session = new authorize;
    $session::open();
    $session::changeID();

    require __DIR__.'/HTMLheader.php';
    require __DIR__.'/HTMLindex.php';
    require __DIR__.'/HTMLfooter.php';
?>