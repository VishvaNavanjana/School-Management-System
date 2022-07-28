<?php
include 'database.php';

$fName = $_POST['firstName'];
$mName = $_POST['middleName'];
$lName = $_POST['lastName'];
$address = $_POST['address'];
$bday = $_POST['bday'];
$sex = $_POST['sex'];
$id = $_POST['id'];
$sid = $_POST['sid'];
$cid = $_POST['cid'];
$tel = $_POST['tel'];
$f = $_POST['pf'];
$m = $_POST['pm'];
$l = $_POST['pl'];
$r = $_POST['relation'];


//$sql = "INSERT INTO STUDENT (FirstName,MiddleName,LastName,StudentID,BirthDay,Address,Sex,SchooName,ParentID,ClassID) VALUES (
  //'$fName','$mName','$lName','$sid','$bday','$address','$sex','Rio College','$id','$cid');";
  $sql = " INSERT INTO PARENT (ID,FirstName,MidlleName,LastName,Relationship,Address) VALUES
  ('$id','$f','$m','$l','$r','$address');";

  $sql2 = "INSERT INTO STUDENT (FirstName,MiddleName,LastName,StudentID,BirthDay,Address,Sex,SchoolName,ParentID,ClassID) VALUES (
          '$fName','$mName','$lName','$sid','$bday','$address','$sex','Rio College','$id','$cid');";

if ($conn->query($sql) === TRUE) {



  //$conn->query($sql2);
  if ($conn->query($sql2) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("account created");';
    echo 'window.location.href = "loggedAdmin.html";';
    echo '</script>';
  }

} else {
  //$conn->query($sql2);
  if ($conn->query($sql2) === TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("account created");';
    echo 'window.location.href = "loggedAdmin.html";';
    echo '</script>';
  }else{
    echo '<script type="text/javascript">';
    echo 'alert("There is something wrong");';
    echo 'window.location.href = "addStudent.html";';
    echo '</script>';
    //echo "Error: " . $sql . "<br>" . $conn->error;
    //echo "<br>";
    //echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
  //echo "Error: " . $sql . "<br>" . $conn->error;
  //echo '<script type="text/javascript">';
  //echo 'alert("There is something wrong");';
  //echo 'window.location.href = "addTeacher.html";';
  //echo '</script>';

}

 ?>
