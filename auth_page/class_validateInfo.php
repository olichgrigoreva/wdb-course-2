<?php
class ValidateInfo
{
    private $valid_user, $valid_pass, $valid_email;
     
    function __construct($valid_user, $valid_pass, $valid_email)
    {
        $this->user = $valid_user;
        $this->pass = $valid_pass;
        $this->email = $valid_email;
        echo "\nValidateInfo construct completed ";
    }

    function validUser(){
        $regex_username = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/m';
        echo "Valid user func: ";
        echo $this->user;
    	
        if (preg_match($regex_username, $this->user)) {
            echo " Correct username. ";
            $validUserRes = true;
        } 
        else {
            echo " Incorrect username. ";
            $validUserRes = false;
        }

        return $validUserRes;
    }

    function validPass(){
        $regex_pass = '/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/m';
        echo "Valid pass func: ";
        echo $this->pass;
        
        if (preg_match($regex_pass, $this->pass)) {
            echo " Correct password. ";
            $validPassRes = true;
        } 
        else {
            echo " Incorrect password. ";
            $validPassRes = false;
        }

        return $validPassRes;
    }

    function confirmPass($valid_confirmPass){
        echo "Confirm pass func: ";
        
        if ($valid_confirmPass == $this->pass) {
            echo "Confirmed password. ";
            $confirmPassRes = true;
        } 
        else {
            echo "Unconfirmed password. ";
            $confirmPassRes = false;
        }

        return $confirmPassRes;
    }

    function validEmail(){
        $regex_email = '/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/m';
        echo "Valid email func: ";
        echo $this->email;
        
        if (preg_match($regex_email, $this->email)) {
            echo " Correct email. ";
            $validEmailRes = true;
        } 
        else {
            echo " Incorrect email. ";
            $validEmailRes = false;
        }

        return $validEmailRes;
    }

}
?>