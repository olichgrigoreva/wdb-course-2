<?php

const SITE_SESSION_START = 0;
const SITE_SESSION_NAME = 'SuperNotebookID';

class authorize {
  private static $site_session_id = SITE_SESSION_START;

  public static function open() {
      session_start();
      if (!isset($_SESSION[SITE_SESSION_NAME]))
        $_SESSION[SITE_SESSION_NAME] = self::$site_session_id;
      else
        self::$site_session_id = $_SESSION[SITE_SESSION_NAME];
  }

  public static function checkEq() {
      return ($_SESSION[SITE_SESSION_NAME] == self::$site_session_id);
  }

  public static function changeID() {
      self::$site_session_id++;
  }

  public static function close() {
      session_unset();
      session_destroy();
      // setcookie();
  }
} // class authorize
?>