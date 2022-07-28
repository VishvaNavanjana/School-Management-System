<?php
include 'database.php';

$fName = $_POST['firstName'];
$mName = $_POST['middleName'];
$lName = $_POST['lastName'];
$address = $_POST['address'];
$bday = $_POST['bday'];
$sex = $_POST['sex'];
$id = $_POST['id'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$tid = $_POST['tid'];


$sql = "INSERT INTO EMPLOYEE (EmployeeId,FirstName,MidlleName,LastName,Address,BirthDay,Sex,ScName) VALUES (
  '$id','$fName','$mName','$lName','$address','$bday','$sex','Rio College');";
  $sql .= " INSERT INTO TEACHER (EId,TId) VALUES ('$id','$tid');";


if ($conn->multi_query($sql) === TRUE) {
  echo '<script type="text/javascript">';
  echo 'alert("account created");';
  echo 'window.location.href = "loggedAdmin.html";';
  echo '</script>';

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo '<script type="text/javascript">';
  echo 'alert("There is something wrong");';
  echo 'window.location.href = "addTeacher.html";';
  echo '</script>';

}

 ?>
