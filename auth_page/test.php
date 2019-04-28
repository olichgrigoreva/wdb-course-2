<?php
session_start();
$t = 123;
$_SESSION["user_id"] = $t;
echo $_SESSION["t"];