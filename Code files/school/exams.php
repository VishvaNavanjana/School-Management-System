<?php
include 'database.php';

//$sql = "select * from EMPLOYEE,SCHOOL where EmployeeId in (select EId from TEACHER) and ScName=SchoolName;"
$sql = "select * from EXAM where SubID in (select SubID from SUBJECT);";
$result = $conn->query($sql);

echo "<table style='width:100%;padding:8px;border:1px solid black;'>";
echo "<th>Exam ID</th>";
echo "<th>Date</th>";
echo "<th>Subject ID</th>";


while ($row = mysqli_fetch_array($result)){
  echo "<tr>";

  echo "<td style='padding:8px;border:1px solid black;'>".$row['ExamID']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Date']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['SubID']."</td>";
  echo "</tr>";
}

echo "</table>";

 ?>
