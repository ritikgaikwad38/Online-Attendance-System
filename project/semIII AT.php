<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/table">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/calculator">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style type="text/css">
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

label
{
	font-weight: bold;
}
.Roll_no 
{
	margin-left: 100px;
	margin-top: 150px;
	font-size: 25px;

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
	margin-left: 50px;
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
	margin-left: 50px;
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
.date
{
	margin-left: 100px;
	font-size: 25px;
}
.Date
{
	width: 150px;
	height: 34px;
	font-size: 15px;
	font-weight: bold;
	border-color:blue;
	border-width: 2px;
}
.From
{
	margin-left: 50px;
	font-size: 25px;
}
.From1
{
	width: 150px;
	height: 34px;
	font-size: 15px;
	font-weight: bold;
	border-color:blue;
	border-width: 2px;
}
.To
{
	margin-left: 50px;
	font-size: 25px;
}
.To1
{
	width: 150px;
	height: 34px;
	font-size: 15px;
	font-weight: bold;
	border-color:blue;
	border-width: 2px;
}
.Lecture
{
	margin-left: 100px;
	font-size: 25px;
}
.Lecture1
{
	width: 150px;
	height: 34px;
	font-size: 20px;
	font-weight: bold;
	border-color:blue;
	border-width: 2px;
}
.present
{
	margin-left: 50px;
	font-size: 25px;
}
.present1
{
	width: 50px;
	height: 30px;
	font-size: 20px;
	font-weight: bold;
	border-color:blue;
	border-width: 2px;
}
.Absent
{
	margin-left: 50px;
	font-size: 25px;
}
.Absent1
{
	width: 50px;
	height: 30px;
	font-size: 20px;
	font-weight: bold;
	border-color:blue;
	border-width: 2px;
}
button
{
	margin-left: 450px;
	width: 150px;
	height: 40px;
	font-size: 20px;
	font-weight: bold;
}
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
        <div class="header"></div>  
        <div class="info">
    <form method="post" action="">
		<label class="Roll_no">Roll No</label>&emsp;
		<?php
		 $servername = "localhost"; 
		 $username = "root";
		 $Password = "";
		 $databaseName = "yogesh";
		 $con=mysqli_connect($servername ,$username ,$Password,$databaseName )or die ('Connection Error'); 

		$sql = "SELECT Roll_no FROM StudentSE ORDER BY Roll_no ASC";
		$result = mysqli_query($con,$sql);

		echo "<select name='Roll_no' class='value' required>";
		echo "<option selected='selected'>Roll No</option>";
		while ($row = mysqli_fetch_array($result)) {
		   echo "<option value='" . $row['Roll_no'] ."'>" . $row['Roll_no'] ."</option>";
		}
		echo "</select>";
		?>
	
		<label class="Sub">Subject</label>&emsp;
		<select name="Subject" class="Subject" required="value">
			<option selected="selected">---select Subject---</option>
			<option value="AM-III">AM-III</option>
			<option value="DLDA">DLDA</option>
			<option value="DM">DM</option>
			<option value="DS">DS</option>
			<option value="ECCF">ECCF</option>
			<option value="OOPM">OOPM</option>
		</select>
		<label class="TH">Theory/Practical</label>
		<select name="Type" class="Type"required="value">
			<option selected="selected">---select Type---</option>
			<option value="THEORY">THEORY</option>
			<option value="PRACTICAL">PRACTICAL</option>
		</select><br><br><br><br>
		<label class="date">Date</label>&emsp;
		<input type="date" class="Date" name="Date" value="Date" required="">
		<label class="From">From</label>
		<select name="From" class="From1" required="value">
	        <option selected="selected">from</option>
	        <option value="8:45">8:45 AM</option>
	        <option value="9:45">9:45 AM</option>
	        <option value="11:00">11:00 AM</option>
	        <option value="12:00">12:00 PM</option>
	        <option value="1:30">1:30 PM</option>
	        <option value="2:30">2:30 PM</option>
	        <option value="3:30">3:30 PM</option>
    	</select>
    	<label class="To">To</label>
    	<select class="To1" name="To" required="value">
	        <option selected="selected">To</option>
	        <option value="9:45">9:45 AM</option>
	        <option value="10:45">10:45 AM</option>
	        <option value="11:00">11:00 AM</option>
	        <option value="12:00">12:00 PM</option>
	        <option value="1:30">1:30 PM</option>
	        <option value="2:30">2:30 PM</option>
	        <option value="3:30">3:30 PM</option>
	        <option value="4:30">4:30 PM</option>
    	</select><br><br><br><br>
    	<label class="Lecture">No of Lecture</label>
		<input type="number" class="Lecture1" name="Lecture" min="1" max="3" required="" autocomplete="off">
		<label class="present">Present</label>
		<input type="radio" class="present1" name="Attendance" value="present" required="">
		<label class="Absent">Absent</label>
		<input type="radio" class="Absent1" name="Attendance" value="Absent" required=""><br><br><br><br>
		<button type="submit" name="submit">Submit</button>
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

 $con=mysqli_connect($servername ,$username ,$password, $DBname )or die ('Connection Error');
 if($con)
 {
	if(isset($_POST['submit']))
	{
	$dt=$_POST['Date'];
    $dt1 = strtotime($dt);
    $dt2 = date("l", $dt1);
    $dt3 = strtolower($dt2);
    if(($dt3 == "saturday" )|| ($dt3 == "sunday"))
	{
        echo "<script>alert('Weekend');</script>";
    } 
    else
	{
		$sql = "CREATE TABLE IF NOT EXISTS semIII_AT(Roll_no CHAR(8),Subject CHAR(10),Type VARCHAR(10),date CHAR(13),Lecture CHAR(3),First CHAR(6), Second CHAR(6),Attendance CHAR(3))";
 		if (mysqli_query($con, $sql))  
 		{
 			$Roll_no=$_POST['Roll_no'];
 			$Subject=$_POST['Subject'];
 			$Date=$_POST['Date'];
 			$From=$_POST['From'];
 			$To=$_POST['To'];
 			$sql = "SELECT * FROM semIII_AT WHERE Roll_no='$Roll_no' AND Subject='$Subject' AND date='$Date' AND First='$From' AND Second='$To'";
		  	$res = mysqli_query($con, $sql);

		  	if (mysqli_num_rows($res) > 0) 
		  	{
		  	  echo "<script>alert('Already taken');</script>";
		  	}
		  	else
		  	{
 			echo "<script>alert('Table created');</script>";
			$Subject=$_POST['Subject'];
			$Type=$_POST['Type'];
			//for selecting subject or practical
			if ($Subject=='AM-III' && $Type=='PRACTICAL')
			{
				echo "<script>alert('AM-III Have no Practicals');</script>";	
			}
			else if ($Subject=='DM' && $Type=='PRACTICAL')
			{
				echo "<script>alert('DM Have no Practicals');</script>";	
			}
			else
			{
			$From=$_POST['From'];
			$To=$_POST['To'];
			$Roll_no=$_POST['Roll_no'];
			$Subject=$_POST['Subject'];
			$Type=$_POST['Type'];
			$Attendance=$_POST['Attendance'];
			$Lecture=$_POST['Lecture'];
			$date=$_POST['Date'];
			if($Attendance=='present')
			{
				
				$starttimestamp = strtotime($From);
				$endtimestamp = strtotime($To);
				$hours_difference = abs($endtimestamp - $starttimestamp)/3600;
				if ($hours_difference==2) 
				{
					if($Lecture==2)
					{
						$Attendance=2;
						$sql="INSERT INTO semIII_AT(Roll_no,Lecture,Attendance,Subject,Type,First,Second,date)VALUES('$Roll_no','$Lecture','$Attendance','$Subject','$Type','$From','$To','$date')"; 	
			 			echo '<script>alert("Data inserted successfully");</script>';
			 			$sql=mysqli_query($con,$sql);
			 		}
			 		else
			 		{
			 			echo '<script>alert("plzzz specified two lecture");</script>';
			 		}
			 	}
			 	else if($hours_difference==1) 
			 	{
		 			if($Lecture==1)
		 			{
		 				$Attendance=1;
						$sql="INSERT INTO semIII_AT(Roll_no,Lecture,Attendance,Subject,Type,First,Second,date)VALUES('$Roll_no','$Lecture','$Attendance','$Subject','$Type','$From','$To','$date')"; 	
			 			echo '<script>alert("Data inserted successfully");</script>';
			 			$sql=mysqli_query($con,$sql);
		 			}
		 			else
		 			{
		 				echo '<script>alert("plzzz specified one lecture");</script>';
		 			}
		 		}
		 		else
		 		{
		 			if($Lecture==3)
		 			{
		 				$Attendance=3;
						$sql="INSERT INTO semIII_AT(Roll_no,Lecture,Attendance,Subject,Type,First,Second,date)VALUES('$Roll_no','$Lecture','$Attendance','$Subject','$Type','$From','$To','$date')"; 	
			 			echo '<script>alert("Data inserted successfully");</script>';
			 			$sql=mysqli_query($con,$sql);
		 			}
		 			else
		 			{
		 				echo '<script>alert("plzzz specified Three lecture");</script>';
		 			}
		 			
				}
			}
			else
			{
				$Attendance=0;
				$sql="INSERT INTO semIII_AT(Roll_no,Lecture,Attendance,Subject,Type,First,Second,date)VALUES('$Roll_no','$Lecture','$Attendance','$Subject','$Type','$From','$To','$date')";	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
			}
			}
		$sql=mysqli_query($con,$sql);
	}
	}
	}	
	mysqli_close($con);
}
}
        
?>
</html>