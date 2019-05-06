<?php
  class validate{
    private $validate_username;
    private $validate_password;
    private $validate_confirm_password;
    private $validate_e_mail;
      function construct(){
        self::$username = $validate_username;
        self::$password = $validate_password;
        self::$confirm_password = $validate_confirm_password;
        self::$e_mail = $validate_e_mail;
          echo "completed";
      }
          function validateUsername(){
            $registration_username = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/m';
              echo "Succeed";
                echo self::$username;
                  if(preg_match(self::$username)){
                    echo "Correct + '$username'";
                      $result = true;
                  }
                  else{
                    echo "Incorrect username or password";
                     $result = false;
                  }
                  return $result;
          }
            function validatePassword(){
              $registration_password = '/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/m';
                echo "Succeed";
                  echo self::$password;
                    if (preg_match(self::$password)){
                      echo "Correct password";
                        $result = true;
                      }
                        else{
                          echo "Incorrect username or password";
                            $result = false;
                        }
                        return $result;
              }
                  function validateConfirmPassword(){
                    if ($validate_confirm_password == self::$password){
                      echo "Correct password";
                        $result = true;
                    }
                        else{
                            echo "Incorrect username or password";
                              $result = false;
                        }
                          return $result;
                  }
                      function validateE_mail(){
                        $registration_e_mail = '/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/m';
                          echo "Succeed";
                            echo self::$e_mail;
                              if(preg_match(self::$e_mail)){
                                echo "Correct Email";
                                  $result = true;
                              }
                                else{
                                  echo "Incorrect email";
                                    $result = false;
                                }
                                  return $result;
                      }
  }
