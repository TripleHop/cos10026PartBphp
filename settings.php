<?php
$host = "feenix-mariadb.swin.edu.au";
$user = "s102579049";
$pwd = "phpmyadmin";
$sql_db = "s102579049_db";

$conn = @mysqli_connect($host,
			$user,
			$pwd,
			$sql_db
);

// Check if connection is successful
if (!$conn) {
  // Displays an error message
  echo "<p>Databse connection failures</p>"; 
}
?>
