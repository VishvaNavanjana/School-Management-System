<?php
include 'database.php';


$tid = $_POST['tid'];
$password = $_POST['password'];

$Qeid = "SELECT EId FROM TEACHER WHERE TId='$tid';";
//$Qpassword = "SELECT EId FROM ADMIN;";

$correctEmail = "";
$correctPassword = "";


$resultPassword = $conn->query($Qeid);
if($resultPassword->num_rows > 0){
  $row = $resultPassword->fetch_assoc();
  $correctPassword = $row['EId'];
}

if($password==$correctPassword){
  echo '<script type="text/javascript">';
  echo 'window.location.href = "loggedTeacher.html";';
  echo '</script>';

}
  else{
    echo '<script type="text/javascript">';
    echo 'alert("Incorrect input");';
    echo 'window.location.href = "teacherLog.html";';
    echo '</script>';
  }


 ?>
