<?php
    require __DIR__.'/HTMLheader.php';

    $SQL = new dbSQL(dbNAME);
    echo('Welcome, ');
    echo ($SQL::getUserLogin());

    require __DIR__.'/HTMLfooter.php';
?>