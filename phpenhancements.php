<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMORPG - PHP Enhancements</title>
</head>
<body>
<header><h1>PHP Enhancements</h1></header>
<section>
    <h2>PHP Enhancements used in this website</h2>
    <ul>
      <li>Supervisor Login</li>
        <ul>
            <li>To create a login, we had to create a database with MySQL, inwhich we can add in supervisor usernames and passwords. Data type validation and sanitisation were used to prevent SQL injection attacks.</li>
            <li><a href="login.php">Click here to see the enhancement</a></li>
            <li><a href="https://www.simplilearn.com/tutorials/php-tutorial/php-login-form">Source</a> Accessed: 22/5/2022</li>
        </ul>
      </br>
    </ul>
  </section>
<?php
define('PHPENHANCEMENTS', true);
include_once 'menu.inc';
include_once 'header.inc';
?>

<?php
include_once 'footer.inc';
?>
</body>
</html>
