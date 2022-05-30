<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <html>
        <head>
            <link rel="stylesheet" href="styles/style.css">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>MMORPG - Attempts</title>
        </head>
        <body>
        <?php
            define('ATTEMPTS', true);
            include_once 'menu.inc';
            include_once 'header.inc';
        ?>
        <section>
            <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
        </section>

            <?php
                include_once 'footer.inc';
            ?>
        </body>
    </html>

    <?php
} else {
    header("Location: login.php");
    exit();
}
?>