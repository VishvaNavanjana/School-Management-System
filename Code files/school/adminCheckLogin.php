<?php
include 'database.php';


$email = $_POST['email'];
$password = $_POST['password'];

$Qemail = "SELECT EEmail FROM Employee_Email,ADMIN,EMPLOYEE WHERE ADMIN.EId=EMPLOYEE.EmployeeId AND Employee_Email.EId=EMPLOYEE.EmployeeId;";
$Qpassword = "SELECT EId FROM ADMIN;";

$correctEmail = "";
$correctPassword = "";


$resultEmail = $conn->query($Qemail);
if($resultEmail->num_rows > 0){
  $row = $resultEmail->fetch_assoc();
  $correctEmail = $row['EEmail'];
}

$resultPassword = $conn->query($Qpassword);
if($resultPassword->num_rows > 0){
  $row = $resultPassword->fetch_assoc();
  $correctPassword = $row['EId'];
}

if($password==$correctPassword && $email==$correctEmail){
  echo '<script type="text/javascript">';
  echo 'window.location.href = "loggedAdmin.html";';
  echo '</script>';

}
  else{
    echo '<script type="text/javascript">';
    echo 'alert("Incorrect input");';
    echo 'window.location.href = "adminLog.html";';
    echo '</script>';
  }


 ?>
