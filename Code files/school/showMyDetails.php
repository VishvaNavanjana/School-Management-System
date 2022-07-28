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

    $sql = "select FirstName,MiddleName,LastName,ParentID,ClassID from STUDENT where studentID = '$sid';";
    $result = $conn->query($sql);

    echo "<table style='width:100%;padding:8px;border:1px solid black;'>";
    echo "<th>First Name</th>";
    echo "<th>Middle Name</th>";
    echo "<th>Last Name</th>";
    //echo "<th>Address</th>";
    echo "<th>Parent ID</th>";
    echo "<th>Class ID</th>";


    while ($row = mysqli_fetch_array($result)){
      echo "<tr>";

      echo "<td style='padding:8px;border:1px solid black;'>".$row['FirstName']."</td>";
      echo "<td style='padding:8px;border:1px solid black;'>".$row['MiddleName']."</td>";
      echo "<td style='padding:8px;border:1px solid black;'>".$row['LastName']."</td>";
      //echo "<td style='padding:8px;border:1px solid black;'>".$row['Address']."</td>";
      echo "<td style='padding:8px;border:1px solid black;'>".$row['ParentID']."</td>";
      echo "<td style='padding:8px;border:1px solid black;'>".$row['ClassID']."</td>";
      echo "</tr>";
    }

    echo "</table>";










  }
}

 ?>
