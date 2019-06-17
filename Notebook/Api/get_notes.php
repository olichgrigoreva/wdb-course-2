<?php
    require_once "../PhpClasses/data_base.php";
    session_start();

    Data_base::connect("maymin_users");
    $user = $_SESSION['user'];
    $user_id = Data_base::query_select("SELECT `id` FROM `users` WHERE `user_name`='$user'")[0]['id'];
    $user_notes = Data_base::query_select("SELECT `id`, `label`, `text`, `date`, `important`, `done` FROM `notes` WHERE `user_id`=$user_id");

    echo json_encode($user_notes);
