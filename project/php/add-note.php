<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$data = file_get_contents('php://input');
  echo $data;
  $json = file_get_contents('php://input');
  $obj = json_decode($json);
  var_dump($obj);
