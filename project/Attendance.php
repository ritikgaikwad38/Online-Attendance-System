	$From=$_POST['From'];
		$To=$_POST['To'];
		$Subject=$_POST['Subject'];
		$Type=$_POST['Type'];
		$name=$_POST['name'];
		$Attendance=$_POST['At'];
		$Lecture=$_POST['Lecture'];
		if($Attendance=='present')
		{
			if($Lecture=1)
			{
				if($Type=='THEORY')
				{
				$Attendance=1;
				$sql="INSERT INTO student5(name,Subject,Theory,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
	 			else
	 			{
	 			$Attendance=1;
				$sql="INSERT INTO student5(name,Subject,Practical,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
	 		}
 			else if($Lecture=2)
 			{
 				if($Type=='THEORY')
				{
				$Attendance=2;
				$sql="INSERT INTO student5(name,Subject,Theory,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
	 			else
	 			{
	 			$Attendance=2;
				$sql="INSERT INTO student5(name,Subject,Practical,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
 			}
 			else
 			{
 				if($Type=='THEORY')
				{
				$Attendance=3;
				$sql="INSERT INTO student5(name,Subject,Theory,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
	 			else
	 			{
	 			$Attendance=3;
				$sql="INSERT INTO student5(name,Subject,Practical,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
 			}
 			
		}
		else
		{
			if($Type=='THEORY')
				{
				$Attendance=0;
				$sql="INSERT INTO student5(name,Subject,Theory,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
	 			else
	 			{
	 			$Attendance=0;
				$sql="INSERT INTO student5(name,Subject,Theory,Lecture,From,To)VALUES('$name','$Subject','$Attendance','$Lecture','$From','$To')"; 	
	 			echo '<script>alert("Data inserted successfully");</script>';
	 			$sql=mysqli_query($con,$sql);
	 			}
		}
		}