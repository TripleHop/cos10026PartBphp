<?php
require_once("settings.php"); //connection info
		

$display_message = "";

//sanitize text
function sanitize($text) {
    $text = trim($_POST["text"],'>@<!.:');
	$new_t = str_replace(' ', '', $text);
    return $text;
};

//Store student information
if (isset($_POST["student_id"])) {
    $student_id = $_POST["student_id"];
} else {
    header("location:quiz.php");
    die();
};
if (isset($_POST["fname"])) {
    $fname = $_POST["fname"];
};
if (isset($_POST["lname"])) {
    $lname = $_POST["lname"];
};

// Marking function
$score = 0;

if (isset($_POST["q1"])){
    $q1 = $_POST["q1"];
    if ($q1 == "Nights"){
        $score += 1;
    } else {
        $score += 0;
    };
};

if (isset($_POST["q2"])){
    $q2 = $_POST["q2"];
    if ($q2 == "1991"){
        $score += 1;
    } else {
        $score += 0;
    };
};

if (isset($_POST["q3"])){
    $q3 = $_POST["q3"];
    if (strtolower($q3) == "don daglow"){
        $score += 1;
    } else {
        $score += 0;
    };
};

if (isset($_POST["q4"])){
    $q4 = $_POST["q4"];
    if ($q4 == "check1" AND $q4 == "check2"){
        $score += 1;
    } else {
        $score += 0;
    };
};

if (isset($_POST["q5"])){
    $q5 = $_POST["q5"];
    if ($q1 !== ""){
        $score += 1;
    } else {
        $score += 0;
    };
};

$date_time = date("Y-m-d H:m:s");

$query = "SELECT * FROM attempts WHERE student_id LIKE '$student_id'";

$result = mysqli_query($conn, $query);

$test_atmpt = mysqli_num_rows($result);

if (!$result) {
    echo "<p>Something is wrong with ", $query, "</p>";
} else if ($test_atmpt <= 1) {
    $test_atmpt += 1;
    if(!$conn){
        //displays error msg
        echo "<p>Database connection failure </p>";
    } else{
        //upon successfull connection 
        $sql_table = "attempts";
        
        //set up the SQL command to query or add data into the table 
        $query = "insert into $sql_table (date_time, student_id, fname, lname, attempt, score) values ('$date_time','$student_id', '$fname', '$lname', '$test_atmpt', '$score')";
        
        //execute the query and store result into the result pointer 
        $result = mysqli_query($conn, $query);
        
        //checks if execution was successfull
        if(!$result){
            echo "<p>Something went wrong: ", $query, "</p>";
        }
        mysqli_close($conn);
    };
} else {
    $display_message = "<p>Attempts Exceeded (2/2)</p>";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMORPG - Quiz Results</title>
</head>
<body>
    <?php
    define('QUIZ', true);
    include_once 'menu.inc';
    include_once 'header.inc';
    ?>
    <div class="quizinfo">
        <?php
        if ($test_atmpt < 2) {
            echo "
        <div>
            <p>Your score is $score/5</p>
            <p>You still have 1 more attempt. Would you like to retry? (1/2)</p>
        </div>
        <div>
            <a href=\"quiz.php\">Yes</a>
            <a href=\"index.php\">No</a>
        </div>";
        } else {echo "
        <div>
            <p>You are out of attempts. (2/2)</p>
        </div>
        <div>
            <a href=\"quiz.php\">Go Back</a>
        </div>";
        };
        ?>
    </div>
    </div>
    <?php include_once("footer.inc"); ?>
</body>
</html>