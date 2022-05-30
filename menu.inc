<?php
if (defined('INDEX')) {
    echo "<nav>   
        <a class=\"active\" href=\"index.php\">Home</a>
        <a href=\"topic.php\">Topic Description</a>
        <a href=\"quiz.php\">Quiz</a>
        <a href=\"enhancements.html\">Enhancements</a>
        <a href=\"phpenhancements.php\">PHP Enhancements</a>  
        <a href=\"login.php\">Login</a>
    </nav>";
}
if (defined('QUIZ')) {
    echo "<nav>
        <a href=\"index.php\">Home</a>
        <a href=\"topic.php\">Topic Description</a>
        <a class=\"active\" href=\"quiz.php\">Quiz</a>
        <a href=\"enhancements.html\">Enhancements</a>
        <a href=\"phpenhancements.php\">PHP Enhancements</a>
        <a href=\"login.php\">Login</a>
    </nav>";
}
if (defined('TOPIC')) {
    echo "
    <nav>
      <a href=\"index.php\">Home</a>
      <a class=\"active\" href=\"topic.php\">Topic Description</a>
      <a href=\"quiz.php\">Quiz</a>
      <a href=\"enhancements.html\">Enhancements</a>
      <a href=\"phpenhancements.php\">PHP Enhancements</a>
      <a href=\"login.php\">Login</a>
    </nav>";
}
if (defined('PHPENHANCEMENTS')) {
    echo "<nav>   
    <a href=\"index.php\">Home</a>
    <a href=\"topic.php\">Topic Description</a>
    <a href=\"quiz.php\">Quiz</a>
    <a href=\"enhancements.html\">Enhancements</a>
    <a class=\"active\" href=\"phpenhancements.php\">PHP Enhancements</a>
    <a href=\"login.php\">Login</a>
  </nav>";
}
if (defined('ATTEMPTS')) {
  echo "<nav>
  <a class=\"active\" href=\"attempts.php\">Logged In</a>
  <a href=\"index.php\">Logout</a>
</nav>";
}
?>