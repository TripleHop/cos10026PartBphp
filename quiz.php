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

<?php
define('QUIZ', true);
include_once 'menu.inc';
include_once 'header.inc';
?>

<section>
<div class="quizinfo">
    <form id="quiz" method="post" action="markquiz.php">
        <br/>    
        <fieldset>
            <legend>&nbspStudent Details&nbsp</legend>
            <p>
                <label for="textanswer">&nbspFirst Name</label>
                <input type="text" name="fname" id="fname" required="required" maxlength="30" required="required" pattern="^[a-zA-Z -]{1,30}$" placeholder="First Name"/><br/>
                <label for="textanswer">&nbspLast Name</label>
                <input type="text" name="lname" id="lname" maxlength="30" required="required" pattern="^[a-zA-Z -]{1,30}$" placeholder="Last Name"/><br/>
                <label for="textanswer">&nbspStudentID</label>
                <input type="text" name="student_id" id="student_id" maxlength="10" minlength="7" required="required" pattern="[0-9]+" placeholder="StudentID"/>
            </p>
            <br>
        </fieldset>
        <br/>
        <fieldset>
            <legend>&nbspQuestions&nbsp</legend>
            <p>&nbspQ1. What was the name of the first Graphical MMORPG? (1 Mark)<br/>
            &nbsp<label><input type="radio" name="q1" id="q1" value="War" required="required"/>&nbspWarcraft</label><br>
            &nbsp<label><input type="radio" name="q1" id="q1" value="Legends"/>&nbspLegends of Future Past</label><br>
            &nbsp<label><input type="radio" name="q1" id="q1" value="Nights"/>&nbspNeverwinter Nights</label><br>
            </p>
            <br/>
            <p>&nbspQ2. When was it released? (1 Mark)<br/> 
            &nbsp<select name="q2" id="q2">
                    <option value="empty" required="required">Select Answer</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1999">1999</option>
                </select>
            </p>
            <br/>
            <p>
                <label for="textanswer">&nbspQ3. Who was the Lead Designer? (1 Mark)</label><br/>
                &nbsp<input type="text" name="q3" id="q3" required="required" maxlength="30" size="30" placeholder="Answer Here"/>
            </p>
            <p>&nbspQ4. Which are key elements of an MMORPG? Multiple Answers (1 Mark)<br/>
                &nbsp<input type="checkbox" name="q4" id="q4" value="check1" required="required"/>
                <label for="check1">Constantly active world</label><br>
                &nbsp<input type="checkbox" name="q4" id="q4"value="check2"/>
                <label for="check2">Character progression</label><br>
                &nbsp<input type="checkbox" name="q4" id="q4"value="check3"/>
                <label for="check3">Conclusion/Ending</label><br>
                &nbsp<input type="checkbox" name="q4" id="q4"value="check4"/>
                <label for="check4">Communication between players</label><br>
            </p>
            <br>
            <p>&nbspQ5. Why has the MMORPG industry grown over the last 20 years? (1 Mark)<br/>
            &nbsp<textarea name="q5" id="q5" rows="4" cols="40" placeholder="Answer Here" required="required"></textarea>
            </p>
            <br>
        </fieldset>
        <p>
            <input type="submit" value="Submit"/>
        </p>
    </form>
</section>
</div>
<?php
include_once 'footer.inc';
?>
</body>
</html>