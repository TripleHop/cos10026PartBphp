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

    <form action="manage.php" method="POST">
        <h2>LOGIN</h2>

            <?php
              if (isset($_GET['error'])) { ?> 
              <p class="error"><?php echo $_GET['error'];?></p>
              <?php } ?>

          <label>ID: </label>
          <input type="text" name="uname" placeholder="Username: "><br>
          <label>Password: </label>
          <input type="password" name="pwd" placeholder="Password"><br>
          <button type="submit">Login</button>
    </form>

</body>
</html>
