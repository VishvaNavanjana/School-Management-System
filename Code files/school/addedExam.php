<?php
include 'database.php';

$examID = $_POST['examID'];
$dt = $_POST['date'];
$subID = $_POST['subID'];


$sql = "INSERT INTO EXAM (ExamID,date,SubID) VALUES (
  '$examID','$dt','$subID'
);";


if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">';
  echo 'alert("exam created");';
  echo 'window.location.href = "loggedAdmin.html";';
  echo '</script>';

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo '<script type="text/javascript">';
  //echo 'alert("There is something wrong");';
  //echo 'window.location.href = "addExam.html";';
  echo '</script>';

}

 ?>
