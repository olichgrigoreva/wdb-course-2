<?php
// $user_name = $_REQUEST["pole_user"];
// $user_pass = $_REQUEST["pole_password"];
// $user_conf_pass = $_REQUEST["pole_confirm_password"]
// $user_email = $_REQUEST["pole_email"];

class Validation {

    function clean_value ($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
        
        return $value;

        
    function check_username ($user_name){
        $u_name = clean_value ($user_name);
        $u_name = strlen($user_name);
        
        if(empty($u_name)){
            return "Поле Username должно быть заполнено";
        }

        if($u_name < 3 || $u_name > 15 ){
            return "Поле Username должно содержать от 3 до 15 символов!";
        }

    }

    function check_password ($user_pass){
        $u_pass = clean_value($user_pass);
        $u_pass = strlen($user_pass);
        
        if($u_pass ==0){
            echo "Поле Password должно быть заполнено";
        }

        if($u_pass < 3 || $u_pass > 10 ){
            echo "Поле Password должно содержать от 3 до 10 символов!";
        }
    }

    function check_conf_password ($user_pass,$user_conf_pass){
        $u_conf_pass = clean_value($user_conf_pass);
        $u_conf_pass = strlen($user_conf_pass);
        $u_pass = clean_value($user_pass);
        $u_pass = strlen($user_pass);

        if($user_conf_pass !== $user_pass){
            echo "Поле Confirm password должно совпадать с полем Password"
        }
    }

    function check_email ($user_email){
        $u_email =  clean_value($user_email);
                
        if (filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
            echo "Адрес указан корректно.";
        }
        else{
            echo "Адрес указан не правильно.";
        }
    }   
  
}


?>