<?php
//$connection = mysqli_connect("localhost", "user", "user", "registration_data");//host,username,password,dbname,port,socket
ini_set("display_errors", 1);
error_reporting(E_ALL);
require_once("class_DB.php");
$db = new Database("localhost", "user", "user", "grigorieva");





/*по нажатию submit, если ассоциативный массив передался не пустой (все, что есть в теге form), то выполняем расчет
*/

/*function validateRegData ($reg_user, $reg_pass, $reg_email){

  $regex_username = '/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/m';
  $regex_pass = '/(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}/m';
  $regex_email = '/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/m';

  


  if (preg_match($regex_username, $reg_user)) {
    echo "некорректный юзер.";
    $validateResult2 = true;
} else {
    echo "пароль не найдено.";
    $validateResult2 = false;
}

if (preg_match($regex_pass, $reg_pass)) {
    //alert("некорректный пароль");
    echo "пользователь.";
    $validateResult1 = true;
} else {
    echo "пароль не найдено.";
    $validateResult1 = false;
}

  if (preg_match($regex_email, $reg_email)) {
    echo "некорректный почта";
    $validateResult3 = true;
} else {
  $validateResult3 = false;
}


$validateResult = $validateResult1 AND $validateResult2 AND $validateResult3;

if ($validateResult == false){
  echo "чот не так";
  //alert ("чот не так");
}

return $validateResult;

  
}*/
// if (!empty($_REQUEST["submit"])) {
    
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];    
    $confirm=$_REQUEST["confirm"];
    $email=$_REQUEST["email"];

require_once("class_validateInfo.php");
$needValidData = new ValidateInfo($username, $password, $email);

echo "\nValidateInfo construct completed ";
print_r($needValidData);




$valid_fields = ($needValidData -> validUser()) * ($needValidData -> validPass()) * ($needValidData -> confirmPass($confirm)) * ($needValidData -> validEmail());
echo "Show valid test: "."$valid_fields";



    
    if ($valid_fields == 1) {
      $insert_query = "INSERT INTO users (usernames, passwords, confirm_pass, emails) VALUES('$username', MD5('$password'), MD5('$confirm'), '$email')";
      $db -> connection($insert_query);
    }

    else{
      echo "NO";      
    }


?>