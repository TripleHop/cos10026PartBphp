<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMORPG - Attempts</title>
</head>
<body>

<?php
define('MANAGE', true);
include_once 'menu.inc';
include_once 'header.inc';
?>
<?php
require_once "settings.php";
$conn = mysqli_connect($host,$user,"phpmyadmin",$sql_db);
if ($conn) {
  echo "<P> success </p>";
  mysqli_close($conn);
}
else {
  echo "<p> Failed";
}
?>
<?php
include_once 'footer.inc';
?>
</body>
</html>
