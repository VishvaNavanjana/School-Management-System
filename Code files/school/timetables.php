<?php
include 'database.php';

//$sql = "select * from EMPLOYEE,SCHOOL where EmployeeId in (select EId from TEACHER) and ScName=SchoolName;"
$sql = "select * from TIME_TABLE t,CLASS c where t.ClassID=c.ClassID;";
$result = $conn->query($sql);

echo "<table style='width:100%;padding:8px;border:1px solid black;'>";
echo "<th>Table ID</th>";
echo "<th>ClassID</th>";
echo "<th>ClassName</th>";
echo "<th>Time slots</th>";


while ($row = mysqli_fetch_array($result)){
  echo "<tr>";

  echo "<td style='padding:8px;border:1px solid black;'>".$row['TableID']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['ClassID']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['ClassName']."</td>";
  echo "<td style='padding:8px;border:1px solid black;'>".$row['Discription']."</td>";
  echo "</tr>";
}

echo "</table>";

 ?>
