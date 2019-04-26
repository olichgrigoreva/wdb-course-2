<?php
  const dbHOST = 'localhost';
  const dbUSER = 'maslennikov';
  const dbPASS = '214365135';
  const dbNAME = 'maslennikov';
  const dbTABLE = 'users';

class dbSQL {
  private static $connection = NULL;
  private static $userFullQuery = NULL;

  public static function connect() {
    try { $mysqli = mysqli_init(); }
    catch(exception $e) {die('_DB_mysqli_INIT_ERROR'); return false;}
    if(empty(self::$connection)) {
      try {
        self::$connection = mysqli_connect(dbHOST, dbUSER, dbPASS, dbNAME);
        return true;
      } catch(exception $e) {
        die('_DB_CONNECT_EXCEPTION_');
        return false;
      }
    }
    die('_DB_CONNECT_EMPTY_');
    return false;
  }

  public static function ValidateLogin($userName, $userPass) {
      $strResult = 'try connection';
      if(!empty(self::$connection)) {
        $queryStr="SELECT * FROM  `".dbTABLE."` WHERE  `login` LIKE  '".$userName."'";
        try {
            $query=mysqli_query(self::$connection, $queryStr);
            if ($query->num_rows == 0) {$strResult='login error';}
            else {
              $queryResult=mysqli_fetch_assoc($query);
              if ($userPass == $queryResult['password']) {
                self::$userFullQuery = $queryResult;
                $strResult='LOGIN OK';
              } else $strResult='password error';
            }
        } catch(mysqli_sql_exception $e) {
            die('_DB_SELECT_EXCEPTION_');
            $strResult = 'DB_SELECT_EXCEPTION';
        }
      } else $strResult = 'connection error';
      return $strResult;
  }

  public static function ValidateRegister() {
    return false;
  }

  public static function getUserID() {
    return self::$userFullQuery['id'];
  }
  public static function getUserLogin() {
    return self::$userFullQuery['login'];
  }
  public static function getUserEmail() {
    return self::$userFullQuery['email'];
  }
  public static function setUserPass($newPass) {
  // UPDATE  `maslennikov`.`users` SET  `password` =  'MD5(egor)' WHERE  `users`.`id` =3;
    $queryStr="UPDATE `".dbTABLE."`.`users` SET  `password` = 'MD5(".$newPass.") ' WHERE  `users`.`id` =".self::$userFullQuery['id'];
    echo(" _newpass:_".$queryStr."_ ");
        try {
            $query=mysqli_query(self::$connection, $queryStr);
            if ($query->num_rows == 0) {$strResult='new pass record ERROR';}
            else {$strResult='new pass record OK';}
        } catch(mysqli_sql_exception $e) {
                      die('_DB_PASS_WRITE_EXCEPTION_');
        }
  }
}
?>