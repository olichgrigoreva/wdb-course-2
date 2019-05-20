<?php
  require __DIR__.'/../../../THEMES/PHP/header.php';

    $SQL = new dbSQL(dbNAME);
    echo('Welcome, ');
    echo ($SQL::getUserLogin());

  require __DIR__.'/../../../THEMES/PHP/footer.php';
?>