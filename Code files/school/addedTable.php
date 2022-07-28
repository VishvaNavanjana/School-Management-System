<?php
include 'database.php';

$tableID = $_POST['tableID'];
$classID = $_POST['classID'];
$discription = $_POST['discription'];


$sql = "INSERT INTO TIME_TABLE(TableID,ClassID,Discription ) VALUES (
  '$tableID','$classID','$discription'
);";


if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">';
  echo 'alert("item created");';
  echo 'window.location.href = "loggedAdmin.html";';
  echo '</script>';

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo '<script type="text/javascript">';
  echo 'alert("There is something wrong");';
  echo 'window.location.href = "addTable.html";';
  echo '</script>';

}

 ?>
