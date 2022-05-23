<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMORPG - Home</title>
</head>
<body>
  <nav>   
    <a class="active" href="index.html">Home</a>
    <a href="topic.html">Topic Description</a>
    <a href="quiz.html">Quiz</a>
    <a href="enhancements.html">Enhancements</a>  
  </nav>

  <?php
  define('INDEX', true);
  include_once 'header.inc';
  ?>

  <section>
    <h2>What is an MMORPG?</h2>
    <p>A massively multiplayer online role-playing game (MMORPG) is a video game that takes place in a persistent world with thousands to 
      millions of players developing their characters in a role playing environment. The world in the game is never static with events occuring 
      across the world that may impact the player even when not online. Unlike more traditional games where the goal is to complete the game, 
      MMORPGs depend on gameplay based around the interactions of players and groups to complete tasks and battles that are progressively 
      harder in exchange for experience, abilities and in-game currency to help gamers build up their characters.</p>
  </section>

  <section>
    <a href="https://www.youtube.com/watch?v=wdMVjcgZCUo">Video Presentation</a>
  </section>

<?php
include_once 'footer.inc';
?>
</body>
</html>
