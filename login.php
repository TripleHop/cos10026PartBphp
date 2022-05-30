<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMORPG - Login</title>
</head>
<body>

  <?php
  define('LOGIN', true);
  include_once 'menu.inc';
  include_once 'header.inc';
  ?>  
<section>
    <form action="manage.php" method="POST">

            <?php if (isset($_GET['error'])) { ?> 
              <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>

          <label>User Name: </label>
          <input type="text" name="uname" placeholder="User Name"><br>
          <label>Password: </label>
          <input type="password" name="password" placeholder="Password"><br>
          
          <button type="submit">Login</button>
    </form>
</section>
<?php
include_once 'footer.inc';
?>
</body>
</html>
