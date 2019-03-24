<?php
ini_set("display_errors", 1); // 1
error_reporting(E_ALL);// 2

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

$test = "Hi, "; // 3
function sayhi($value, $person) { // $value == "Hi, "
$result1 = $value . $person; // 5
return $result1; // 6
}

$result = "";
if (!empty($_REQUEST["submit"])) {
$result = "Say hi: " . sayhi($test, $_REQUEST["person"]); // 4 // 6.5
// echo $result; // 7
}
?>
<html>
<head>
</head>
<body>
<?php echo $result;?>
<form method="POST">
<input name="person">
<input type="submit" name="submit" value="Say Hi">
</form>
</body>
</html>