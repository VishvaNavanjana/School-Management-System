<?php
include 'database.php';

//$sql = "select * from EMPLOYEE,SCHOOL where EmployeeId in (select EId from TEACHER) and ScName=SchoolName;"
$sql = "select s.FirstName,s.MiddleName,s.Lastname,s.StudentID,s.BirthDay,s.Address,s.Sex,s.ParentID,s.ClassID from
STUDENT s,PARENT p,CLASS c where s.ParentID=p.ID and s.ClassID=c.ClassID;";
$result = $conn->query($sql);

echo "<table style='width:100%;padding:8px;border:1px solid black;'>";
echo "<th>Name</th>";
echo "<th>Sudent ID</th>";
echo "<th>BirthDay</th>";
echo "<th>Address</th>";
echo "<th>Sex</th>";
echo "<th>Parent ID</th>";
echo "<th>Class ID</th>";

while ($row = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['FirstName']." ".$row['MiddleName']." ".$row['Lastname']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['StudentID']."</td>";

  echo "<td style='padding:8px;border:1px solid black;'>".$row['BirthDay']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Address']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Sex']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['ParentID']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['ClassID']."</td>";
  echo "</tr>";
}

echo "</table>";

 ?>
