<?php
include 'database.php';

//$sql = "select * from EMPLOYEE,SCHOOL where EmployeeId in (select EId from TEACHER) and ScName=SchoolName;"
$sql = "select e.EmployeeId,e.FirstName,e.MidlleName,e.LastName,e.Address,e.BirthDay,e.Sex from EMPLOYEE e,SCHOOL s where EmployeeId in (select EId from TEACHER) and ScName=SchoolName;";

$result = $conn->query($sql);

echo "<table style='width:100%;padding:8px;border:1px solid black;'>";
echo "<th>EmployeeID</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";
echo "<th>Birthday</th>";
echo "<th>Sex</th>";

while ($row = mysqli_fetch_array($result)){
  echo "<tr>";

  echo "<td style='padding:8px;border:1px solid black;'>".$row['EmployeeId']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['FirstName']." ".$row['MidlleName']." ".$row['LastName']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Address']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['BirthDay']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Sex']."</td>";
  echo "</tr>";
}

echo "</table>";

 ?>
