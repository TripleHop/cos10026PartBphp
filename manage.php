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

$conn = @mysqli_connect($host,
			$user,
			$pwd,
			$sql_db
);

// Check if connection is successful
if (!$conn) {
  // Displays an error message
  echo "<p>Databse connection failures</p>"; // not in production script
}
?>
<?php

session_start();

if (isset($_POST['uname']) && isset($_POST['pwd'])) {

  function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$uname = validate($_POST['uname']);
$pass = validate($_POST['pwd']);

if(empty($uname)) {
  header("Location: login.php?error=User Name is required");
  exit();
} else if (empty($pass)) {
  header("Location: login.php?error=Password is required");
  exit();
} else {
  $sql = "SELECT * FROM admin WHERE user_name='$name' AND password = '$pass'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    if ($row['user_name'] === $uname && $row['password'] === $pass) {
    echo "Logged in!";
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'];
    header("Location: markquiz.php");
    exit();
  } else {
    header("Location: login.php?error=Incorrect User name or password");
    exit();
  } 
  } else {
  header("Location: login.php?error=Incorrect User name or password");
  exit();
}
}

} else {
  header("Location: login.php");
  exit();
}

?>
<?php
include_once 'footer.inc';
?>
</body>
</html>
