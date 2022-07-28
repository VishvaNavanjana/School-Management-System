<?php
include 'database.php';

//$sql = "select * from EMPLOYEE,SCHOOL where EmployeeId in (select EId from TEACHER) and ScName=SchoolName;"
$sql = "select * from PARENT;";
$result = $conn->query($sql);

echo "<table style='width:100%;padding:8px;border:1px solid black;'>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Address</th>";


while ($row = mysqli_fetch_array($result)){
  echo "<tr>";

  echo "<td style='padding:8px;border:1px solid black;'>".$row['ID']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['FirstName']." ".$row['MidlleName']." ".$row['LastName']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Address']."</td>";
  echo "</tr>";
}

echo "</table>";

 ?>
