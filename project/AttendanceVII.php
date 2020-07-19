<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Side Navigation Bar</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/table">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/calculator">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/table">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head><style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;

}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
  margin-top: 50px;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;

}
.wrapper .main_content .info
{
  margin-top: 100px;
  margin-left: 250px;
  height: 200px;
  font-size: 30px;
}

label
{
  font-weight: bold;
  margin-left: 100px;
}
.Roll_no 
{
  margin-left: 200px;
  margin-top: 150px;
  font-size: 20px;

}
.value 
{
  margin-top: 80px;
  width: 80px;
  height: 34px;
  font-size: 15px;
  font-weight: bold;
  border-color:blue;
  border-width: 2px; 
}
.Sub
{
  margin-left: 100px;
  font-size: 25px;
}
.Subject
{
  width: 150px;
  height: 34px;
  font-size: 15px;
  font-weight: bold;
  border-color:blue;
  border-width: 2px;
}

.TH
{
  margin-left: 200px;
  font-size: 25px;

}
.Type
{
  width: 150px;
  height: 34px;
  font-size: 15px;
  font-weight: bold;
  border-color:blue;
  border-width: 2px;
}
.Marks
{
  margin-left: 100px;
  font-size: 25px;
}
.Marks1
{
  width: 150px;
  height: 34px;
  text-align: center;
  font-size: 15px;
  font-weight: bold;
  border-color:blue;
  border-width: 2px;
}
button
{
  margin-left: 150px;
  width: 150px;
  height: 40px;
  font-size: 20px;
  font-weight: bold;
}

.a1 {
    background-color: lightblue;
  box-shadow: 0 5px 0 black;
  color: white;
  padding: 1em 1.5em;
  position: relative;
  text-decoration: none;
  width: 200px;
  margin-left: : 400px;
  margin-top: 200px;
  text-transform: uppercase;

}

.a1:hover {
  background-color: #ce0606;
  cursor: pointer;
}

.a1:active {
  box-shadow: none;
  top: 5px;
}

/* Non-Demo Styles */
</style>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="Student.php"><i class="fas fa-user"></i> Student Profile</a></li>
            <li><a href="CLASS.php"><i class="fa fa-users"></i>&emsp;Attendance</a></li>
            <li><a href="CLASS2.php"><i class="fa fa-calculator"></i>&emsp;Calculate</a></li>
            <li><a href="CLASS1.php"><i class="fa fa-table"></i>&emsp;Record</a></li>
        </ul> 
    </div>
    

<div class="main_content">
        <div class="header"><h1 style="text-align: center;">Attendance Calculating</h1></div>  
        <div class="info">

        	<form method="post" action="">
        	<label style="text-align: center;">Roll No</label>
	<?php
		 $servername = "localhost"; 
		 $username = "root";
		 $password  = "";
		 $DBname = "yogesh";
		 $con=mysqli_connect($servername ,$username ,$password, $DBname)or die ('Connection Error'); 

		$sql = "SELECT Roll_no FROM StudentBE ORDER BY Roll_no ASC";
		$result = mysqli_query($con,$sql);

		echo "<select name='Roll_no' class='value' required='value'>";
		echo "<option selected='selected'>Roll no</option>";
		while ($row = mysqli_fetch_array($result)) {
		   echo "<option value='" . $row['Roll_no'] ."'>" . $row['Roll_no'] ."</option>";
		}
		echo "</select>";

	?><br><br><br>
	<button type="submit" name="calculate">calculate</button>
</form>
</div>
</div>
</div>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "yogesh";

 $con=mysqli_connect($servername ,$username ,$password, $DBname)or die ('Connection Error');
 if($con)
 {
 	if(isset($_POST['calculate']))
	{
		
		//$subject= $_POST['subject'];
		//$Type=$_POST['Type'];
		$Roll_no= $_POST['Roll_no'];

		//FOR CN THEORY
		$present="SELECT SUM(Attendance) as Attendance1 FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='DSIP' AND Type='THEORY'";
		$result=mysqli_query($con,$present);
		$data=mysqli_fetch_array($result);
		
		$present1="SELECT SUM(Lecture) as 'Lecture' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='DSIP' AND Type='THEORY'";
		$result1=mysqli_query($con,$present1);
		$data1=mysqli_fetch_array($result1);
		$Average1=($data['Attendance1']/$data1['Lecture'])*100;



		$present2="SELECT SUM(Attendance) as Attendance1 FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='DSIP' AND Type='PRACTICAL'";
		$result2=mysqli_query($con,$present2);
		$data2=mysqli_fetch_array($result2);
		
		$present3="SELECT SUM(Lecture) as 'Lecture' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='DSIP' AND Type='PRACTICAL'";
		$result3=mysqli_query($con,$present3);
		$data3=mysqli_fetch_array($result3);
		$Average2=($data2['Attendance1']/$data3['Lecture'])*100;


		//FOR CN PRACT

		$present4="SELECT SUM(Attendance) as 'Attendance1' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='MCC' AND Type='THEORY'";
		$result4=mysqli_query($con,$present4);
		$data4=mysqli_fetch_array($result4);
		   //for Total number of lecture 
		$present5="SELECT SUM(Lecture) as 'Lecture' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='MCC' AND Type='THEORY' ";
		$result5=mysqli_query($con,$present5);
		$data5=mysqli_fetch_array($result5);
		$Average3=($data4['Attendance1']/$data5['Lecture'])*100;
	


		$present6="SELECT SUM(Attendance) as 'Attendance1' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='MCC' AND Type='PRACTICAL'";
		$result6=mysqli_query($con,$present6);
		$data6=mysqli_fetch_array($result6);
		   //for Total number of lecture 
		$present7="SELECT SUM(Lecture) as 'Lecture' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='MCC' AND Type='PRACTICAL'";
		$result7=mysqli_query($con,$present7);
		$data7=mysqli_fetch_array($result7);
		$Average4=($data6['Attendance1']/$data7['Lecture'])*100;


		$present8="SELECT SUM(Attendance) as 'Attendance1' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='AISC' AND Type='THEORY'";
		$result8=mysqli_query($con,$present8);
		$data8=mysqli_fetch_array($result8);
		   //for Total number of lecture 
		$present9="SELECT SUM(Lecture) as 'Lecture' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='AISC' AND Type='THEORY' ";
		$result9=mysqli_query($con,$present9);
		$data9=mysqli_fetch_array($result9);
		$Average5=($data8['Attendance1']/$data9['Lecture'])*100;
	

		$present10="SELECT SUM(Attendance) as 'Attendance1' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='AISC' AND Type='PRACTICAL'";
		$result10=mysqli_query($con,$present10);
		$data10=mysqli_fetch_array($result10);
		   //for Total number of lecture 
		$present11="SELECT SUM(Lecture) as 'Lecture' FROM semVII_AT WHERE Roll_no=$Roll_no AND subject='AISC' AND Type='PRACTICAL' ";
		$result11=mysqli_query($con,$present11);
		$data11=mysqli_fetch_array($result11);
		$Average6=($data10['Attendance1']/$data11['Lecture'])*100;


		$sql = "CREATE TABLE IF NOT EXISTS AttendanceVII(Roll_no INT(3),DSIPTH INT(3),DSIPPR INT(3),MCCTH INT(3),MCCPR INT(3),AISCTH INT(3),AISCPR INT(3))";
 		if (mysqli_query($con, $sql))  
 		{
 		$sql = "SELECT * FROM AttendanceVII WHERE Roll_no='$Roll_no'";
	  	$res = mysqli_query($con, $sql);

	  	if (mysqli_num_rows($res) > 0) 
	  	{
	  	  echo "<script>alert('Already taken');</script>";
	  	}
	  	else
	  	{
		$sql9="INSERT INTO AttendanceVII(Roll_no,DSIPTH,DSIPPR,MCCTH,MCCPR,AISCTH,AISCPR)VALUES('$Roll_no','$Average1','$Average2','$Average3','$Average4','$Average5','$Average6')";
		$sql=mysqli_query($con,$sql9);
		echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
		}
		mysqli_close($con); 
	}		
}
}
		
?>
</html>