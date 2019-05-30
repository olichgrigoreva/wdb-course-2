<?php
class User extends Connection {
  protected function getAllUsers() {
    $sql = "SELECT * FROM user";
    $result = $this->connection()->query($sql);
    $numRows = $result->num_rows;
      if($numRows > 0) {
        while($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
  }
}
