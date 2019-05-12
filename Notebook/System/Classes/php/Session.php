<?php
/**
 * Класс для проверки вводимой информации
 */
  class Session {

    public static function open_session() {
      session_start();
      return session_id();
    }

    public static function close_session() {
      session_start();
      session_unset();
      sesion_destroy();
    }
  }
?>
