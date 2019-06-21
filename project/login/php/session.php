<?php
class session {
  function create_session($username) {
    session_start();
      $_SESSION['login'] = $username;
  }
    function close_session() {
    session_unset();
    session_destroy();
    }
  }
