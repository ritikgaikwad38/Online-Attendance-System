<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/caret-left">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
margin-top: 20px;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<body>
	<a href="#" style="font-size: 15px; text-decoration: none;"><i class="fa fa-caret-left" aria-hidden="true"><b style="font-size: 20px; background-color: lightblue; border:2px solid black;">Back</b></i></a>
<table>
<tr>
	<th colspan="1">Roll No</th>
	<th colspan="1">AM-IV</th>
	<th colspan="2">COA</th>
	<th colspan="2">OSTL</th>
	<th colspan="2">OS</th>
	<th colspan="2">CG</th>
	<th colspan="2">AOA</th>
</tr>
<tr>
	<td></td>
	<td>TH</td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>PR</td>
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
$sql = "SELECT Roll_no,AMIVTH,COATH,COAPR,OSTLTH,OSTLPR,OSTH,OSPR,CGTH,CGPR,AOATH,AOAPR FROM AttendanceIV";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["AMIVTH"]. "</td><td>" . $row["COATH"] . "</td><td>" . $row["COAPR"] . "</td><td>" . $row["OSTLTH"] . "</td><td>" . $row["OSTLPR"] . "</td><td>" . $row["OSTH"] . "</td><td>" . $row["OSPR"] . "</td><td>" . $row["CGTH"] . "</td><td>" . $row["CGPR"] . "</td><td>" . $row["AOATH"] . "</td><td>" . $row["AOAPR"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>