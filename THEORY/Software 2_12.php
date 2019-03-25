<html>
  <head>
  </head>
  <body>
    <form method="POST" 
      <input name="person">
      <input type="submit" name="submit" value="Say Hi">
    </form>
  </body>
</html>

<?php
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  echo "<pre>" - тег для 
  print_r($_REQUEST);
  echo "/<pre>"


  $test = 'Hi there';
  function sayhi($value, $person) {
  $result = $value . "Ivan";
  return $result;
  }
if (!empty($_REQUEST["submit"])) {
  $result = sayhi($test, $_REQUEST["person"]);
  echo $result
}
?>