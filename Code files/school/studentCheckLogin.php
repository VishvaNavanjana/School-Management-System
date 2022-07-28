<?php
include 'database.php';


$sid = $_POST['sid'];
//$password = $_POST['password'];

$Qeid = "SELECT COUNT(StudentID) FROM STUDENT WHERE StudentID='$sid';";
//$Qpassword = "SELECT EId FROM ADMIN;";

//$correctEmail = "";
//$correctPassword = "";


$resultPassword = $conn->query($Qeid);
if($resultPassword->num_rows > 0){
  $row = $resultPassword->fetch_assoc();
  $numItems = $row['COUNT(StudentID)'];

  if($numItems != '1'){
    echo '<script type="text/javascript">';
    echo 'alert("Incorrect input");';
    echo 'window.location.href = "studentLog.html";';
    echo '</script>';
  }else{
    echo '<script type="text/javascript">';
    echo 'window.location.href = "loggedStudent.html";';
    echo '</script>';
  }
}

 ?>
