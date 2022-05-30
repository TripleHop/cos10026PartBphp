<?php   
 include 'settings.php';  
 
 if (isset($_GET['student_id'])) {  
      $student_id = $_GET['student_id'];  
      $sql = "DELETE FROM `attempts` WHERE student_id = '$student_id'";  
      $result = mysqli_query($conn,$sql);  
      if ($result) {  
           header('location:list.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>     
