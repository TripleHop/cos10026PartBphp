
<?php
require_once("settings.php");   
$sql = "SELECT * FROM `attempts`  \n";
$result = mysqli_query($conn,$sql);
if(!$result) {
    echo "<p>Something is wrong with ", $query, "</p>";
} else {
   
    echo "<table border=\"1\">\n";
    echo "<tr>\n "
        ."<th scope=\"col\">student id</th>\n "
        ."<th scope=\"col\">First name</th>\n "
        ."<th scope=\"col\">Last name</th>\n "
        ."<th scope=\"col\">attempt</th>\n "
        ."<th scope=\"col\">score</th>\n "
        ."<th scope=\"col\">date_time</th>\n "
        ."</tr>\n ";
    

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>\n ";
        echo "<td>",$row["student_id"],"</td>\n ";
        echo "<td>",$row["fname"],"</td>\n ";
        echo "<td>",$row["lname"],"</td>\n ";
        echo "<td>",$row["attempt"],"</td>\n ";
        echo "<td>",$row["score"],"</td>\n ";
        echo "<td>",$row["date_time"],"</td>\n ";
        echo "<td><a href='delete.php?student_id=",$row['student_id']."' id='btn'>Delete</a></td>";
        echo "</tr>\n ";
    }
    echo "</table>\n ";
    
    mysqli_free_result($result);
}


mysqli_close($conn);

?>