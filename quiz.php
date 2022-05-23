<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="styles/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MMORPG - Quiz</title>
</head>
<body>
    <nav>
        <a href="index.html">Home</a>
        <a href="topic.html">Topic Description</a>
        <a class="active" href="quiz.html">Quiz</a>
        <a href="enhancements.html">Enhancements</a>
    </nav>

<?php
define('QUIZ', true);
include_once 'header.inc';
?>

<section>
<div class="quizinfo">
    <form id="quiz" method="post" action=" https://mercury.swin.edu.au/it000000/formtest.php">
        <fieldset>
            <legend>Student details</legend>
            <p>
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" id="FirstName" maxlength="20" size="15" required="required" pattern="[A-Za-z- ]{1,30}" /> <br />
                <label for="LastName">Last Name</label>
                <input type="text" name="LastName" id="LastName" maxlength="20" size="15" required="required" pattern="[A-Za-z- ]{1,30}" /> <br />
                <label for="StudentID">StudentID</label>
                <input type="text" name="StudentID" id="StudentID" maxlength="10" size="10" required="required" pattern="\d(7|10)" />
            </p>
        </fieldset>
        <fieldset>
            <p> What was the name of the first Graphical MMORPG? <br />
                <label><input type="radio" name="radio" value="War" /> Warcraft</label>
                <label><input type="radio" name="radio" value="Legends" /> Legends of Future Past</label>
                <label><input type="radio" name="radio" value="Nights" required="required" /> Neverwinter Nights</label>
            </p>
            <br />
            <p> When was it released? <br /> 
                <select name="Release" id="Release">
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991" required="required">1991</option>
                    <option value="1999">1999</option>
                </select>
            </p>
            <br />
            <p>
                <label for="textanswer">Who was the Lead Designer?</label> <br />
                <input type="text" name="textanswer" id="textanswer" maxlength="30" size="30" required="required" />
            </p>
        </fieldset>
        <fieldset>
            <p> Which are key elements of an MMORPG (select all appropriate) <br />
                 <label for="check1">Constantly active world</label>
                <input type="checkbox" name="check1" value="check1" /> <br />
                 <label for="check2">Character progression</label>
                <input type="checkbox" name="check2" value="check2" /> <br />
                 <label for="check3">Conclusion/Ending</label>
                <input type="checkbox" name="check3" value="check3" /> <br />
                 <label for="check4">Communication between players</label>
                <input type="checkbox" name="check4" value="check4" />
            </p>
            <br />
            <p> Why has the MMORPG industry grown over the last 20 years? <br />
                <textarea name="textarea" rows="4" cols="40" placeholder="Answer Here"></textarea>
            </p>
        </fieldset>
        <p>
            <input type="submit" value="Submit" />
        </p>
    </form>
</section>
</div>
<?php
include_once 'footer.inc';
?>
</body>
</html>
