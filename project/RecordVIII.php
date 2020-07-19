<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
margin-top: 20px;
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
	<th colspan="2">HMI</th>
	<th colspan="2">DC</th>
	<th colspan="1">CC</th>
</tr>
<tr>
	<td></td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>PR</td>
	<td>PR</td>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "Attendance_MANAGEMENT");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Roll_no,HMITH,HMIPR,DCTH,DCPR,CCPR FROM AttendanceVIII";
$result = $conn->query($sql);
if ($result->num_rows> 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["HMITH"]. "</td><td>" . $row["HMIPR"] . "</td><td>" . $row["DCTH"] . "</td><td>" . $row["DCPR"] . "</td><td>" . $row["CCPR"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>