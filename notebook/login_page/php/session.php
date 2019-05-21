<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

  class Session {
    public function create_session($username) {
      session_start();
      $_SESSION['login'] = $username;
    }
      public function close_session($username) {
        session_unset();
        session_destroy();
      }
  }
