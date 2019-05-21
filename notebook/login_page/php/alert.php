<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
  require_once("CheckEmptyFields.php");
    function alert($message) {
      echo "<script type='text/javascript'>
      document.addEventListener('DOMContentLoaded', loaded);
      function loaded(event) {
      let myalert = document.createElement('div');
      myalert.className='alert alert-info alert-dismissible fade show';
      myalert.role = 'alert';
      myalert.innerHTML = '<strong>'+'$message'+'</strong>';

          let myalert_close_btn = document.createElement('button');
          myalert_close_btn.type = 'button';
          myalert_close_btn.className='close';
          myalert_close_btn.setAttribute('data-dismiss', 'alert');
          myalert_close_btn.setAttribute('aria-label', 'Close');

              let cross = document.createElement('span');
              cross.setAttribute('aria-hidden', 'true');
              cross.innerHTML = '&times;';

                myalert_close_btn.appendChild(cross);
                myalert.appendChild(myalert_close_btn);
                document.querySelector('.container').append(myalert);
      }
      </script>";
    }
