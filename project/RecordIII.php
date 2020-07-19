<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/caret-left">
<style type="text/css">

body{
	text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: center;
margin-top: 20px;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
/* Non-Demo Styles */
</style>
<body>

<a href="#" style="font-size: 15px; text-decoration: none;"><i class="fa fa-caret-left" aria-hidden="true"><b style="font-size: 20px; background-color: lightblue; border:2px solid black;">Back</b></i></a>
<table>
<tr>
	<th colspan="1">Roll No</th>
	<th colspan="1">AM-III</th>
	<th colspan="2">DLDA</th>
	<th colspan="1">DM</th>
	<th colspan="2">DS</th>
	<th colspan="2">ECCF</th>
	<th colspan="2">OOPM</th>
</tr>
<tr>
	<td></td>
	<td>TH</td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>PR</td>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "Attendance_MANAGEMENT");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Roll_no,AMIIITH,DLDATH,DLDAPR,DMTH,DSPR,DSTH,ECCFTH,ECCFPR,OOPMTH,OOPMPR FROM AttendanceIII";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["AMIIITH"]. "</td><td>" . $row["DLDATH"] . "</td><td>" . $row["DLDAPR"] . "</td><td>" . $row["DMTH"] . "</td><td>" . $row["DSPR"] . "</td><td>" . $row["DSTH"] . "</td><td>" . $row["ECCFTH"] . "</td><td>" . $row["ECCFPR"] . "</td><td>" . $row["OOPMTH"] . "</td><td>" . $row["OOPMPR"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>