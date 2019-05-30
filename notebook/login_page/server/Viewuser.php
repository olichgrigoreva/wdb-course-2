<?php
class ViewUser extends User {
  public function showAllUsers() {
    $datas = $this->getAllUsers();
    foreach ($variable as $data) {
      echo $data['uid']."<br>";
      echo $data['pwd'];"<br>";
    }
  }
}
