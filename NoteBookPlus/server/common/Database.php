<?php

class Database {

  private $connection;
  private $db_host = "localhost";
  private $db_user = "register";
  private $db_password = "register";
  private $db_name = "Note_Bronnikov";
  private $db_table = "users";

  function __construct() {
    $this->db_table;
    $this->connection = mysqli_connect(
      $this->db_host,
      $this->db_user,
      $this->db_password,
      $this->db_name
    );
  }


  function new_user($user, $email, $password) {
    mysqli_query($this->connection, "INSERT INTO ".$this->db_table." (user_name, e_mail, password) VALUES ('$user','$email',MD5('$password'))")
    or die("Ошибка. Имя пользователя занято");
  }

  function new_password($user, $password) {
    mysqli_query($this->connection, "UPDATE ".$this->db_table." SET password = MD5('$password') WHERE user_name = '$user'" )
    or die("Ошибка!");
  }

  function info_user_email($user) {
    $info_user = mysqli_fetch_assoc(mysqli_query($this->connection, "SELECT e_mail FROM ".$this->db_table." WHERE user_name = '$user'" ));
    return $info_user["e_mail"];
  }

  function auth_user($username, $password) {
    $massiv_users = mysqli_query($this->connection, "SELECT * FROM ".$this->db_table);
    while ($stroki_user = mysqli_fetch_assoc($massiv_users)) {
      if($username == $stroki_user["user_name"] && MD5($password) == $stroki_user["password"]) {
        return "true";
        die;
      }
    }
  }

}
?>
