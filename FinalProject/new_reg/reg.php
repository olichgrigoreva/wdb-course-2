<?php
$connection = mysqli_connect ("localhost", "root", "virtual", "LenasNoteBook");

$username   = $_REQUEST ["name"];
$password   = $_REQUEST ["pass"];
$repeatpass = $_REQUEST ["repas"];
$email      = $_REQUEST ["email"];
//
// function emptyField (){
//     if ($username == "")
// //
//
// }
//
// // function empyfield ($username, $password, $email)
// //     if ($username = NULL){
// //         alert ("Запоните все поля");
// //     }
// //     elseif ($password = NULL){
// //         alert ("Запоните все поля");
// //     }
// //     elseif ($email = NULL) {
// //         alert ("Запоните все поля");  }
//
// function fetch ($query){
//     $result=[];
//     while ($row = mysqli_fetch_assoc($query)) {
//          $result[] = $row;
//     }
//     return $result;
// }

$insert_query = "INSERT INTO Users (username, password, email) VALUES('$username', '$password', '$email')";

// $query=query($connection, );
//
// $fetch = $connection->fetch($query);
//
//                 $echores = new EchoClass();
//                 $echores->echores($fetch);
//
// ?>
