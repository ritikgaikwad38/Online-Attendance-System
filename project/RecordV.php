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
	<th colspan="2">CN</th>
	<th colspan="2">DBMS</th>
	<th colspan="1">WDL</th>
	<th colspan="2">MP</th>
	<th colspan="1">TCS</th>
	<th colspan="1">MSD</th>
	<th colspan="2">BCE</th>
</tr>
<tr>
	<td></td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>PR</td>
	<td>PR</td>
	<td>TH</td>
	<td>PR</td>
	<td>TH</td>
	<td>TH</td>
	<td>TH</td>
	<td>PR</td>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "yogesh");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Roll_no,CNTH,CNPR,DBMSTH,DBMSPR,WDLPR,MPPR,MPTH,TCSTH,MSDTH,BCETH,BCEPR FROM Attendance";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["CNTH"]. "</td><td>" . $row["CNPR"] . "</td><td>" . $row["DBMSTH"] . "</td><td>" . $row["DBMSPR"] . "</td><td>" . $row["WDLPR"] . "</td><td>" . $row["MPTH"] . "</td><td>" . $row["MPPR"] . "</td><td>" . $row["TCSTH"] . "</td><td>" . $row["MSDTH"] . "</td><td>" . $row["BCETH"] . "</td><td>" . $row["BCEPR"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>