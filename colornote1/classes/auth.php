<?php
require_once("user.php");

class Auth {
    
  function logout(){
      session_destroy(); 
  }

  function registr ($username, $password, $email){
      if (!empty($username) && !empty($password) && !empty($email)) { 
          $user = new User();
          $user->add_reg_user($username, $password, $email);

          header("Location: login.php");
      }
      else { 
        echo "введите имя пользователя и пароль"; 
      }
  }
   
  
  function login($username, $password){
    if(!empty($username) && !empty($password)){
      $user = new User;
      $user -> select_user();
      $_SESSION["user"] = $current_user;
      
      echo "USER: <pre>"; 
      print_r($current_user);
      echo "</pre>; ";

    }
    else{                                                           
      echo "Введите имя и пароль, или зарегестрируйтесь.";    
    }

  }
   




}
?>