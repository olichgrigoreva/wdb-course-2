<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
  require_once "database.php";

  $user = $_SESSION['user'];
  session_start();
  database::connect("notebook");

    $user_id = database::query_select("SELECT `id` FROM `users` WHERE `user_name`='$user'")[0]['id'];
    $user_notes = database::query_select("SELECT `id`, `label`, `text`, `date`, `important`, `done` FROM `notes` WHERE `user_id`=$user_id");
      echo json_encode($user_notes);
