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
	<th colspan="2">SE</th>
	<th colspan="2">SPCC</th>
	<th colspan="2">DWM</th>
	<th colspan="2">CSS</th>
</tr>
<tr>
	<td></td>
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
$sql = "SELECT Roll_no,SETH,SEPR,SPCCTH,SPCCPR,DWMPR,DWMTH,CSSTH,CSSPR FROM AttendanceVI";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["SETH"]. "</td><td>" . $row["SEPR"] . "</td><td>" . $row["SPCCTH"] . "</td><td>" . $row["SPCCPR"] . "</td><td>" . $row["DWMTH"] . "</td><td>" . $row["DWMPR"] . "</td><td>" . $row["CSSTH"] . "</td><td>" . $row["CSSPR"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>