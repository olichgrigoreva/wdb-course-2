<?php
/**
 * Класс для проверки вводимой информации
 */
  class Session {
    public $id_session;

    public function open_session() {
      session_start();
      $id_session = session_id();
    }

    public function close_session() {
      session_start();
      session_unset();
      sesion_destroy();
    }
  }
?>
