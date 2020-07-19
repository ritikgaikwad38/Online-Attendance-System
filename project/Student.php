<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/table">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/calculator">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/table">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style type="text/css">
  .form{
    border: 3px solid black;
    margin-left: 10px;
    width: 650px;
    height: 370px;
    margin-top: -50px;
  }
  /*label,input{
    margin-top: 20px;
  }*/
  label{
    margin-left: 120px;
    font-size: 20px;
  }
  .label{
    margin-top: 60px;
    font-size: 20px;
    text-align: center;
  }
  button{
    margin-left: 100px;
    font-size: 30px;
    width: 200px;
    height: 40px;
  }
  select{
    font-size: 20px;

  }

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
        <div class="header"><h1 style="text-align: center; margin-top: 70px;">Student Detail</h1></div>  
        <div class="info">
  <form method="POST" action="" class="form">
    <label class="label"><b>Student Name:</b></label>
    <input type="text" name="name"  class="label"placeholder="name" required="" autocomplete="off"><br><br><br>
    <label><b>Roll No:</b></label>
    <input type="number" style="height: 20px;" name="Rollno" min="1" max="100" pattern="[1-100]" required="">
    <label><b>Class:</b></label>
    <select name="Class" required="value">
      <option value="" selected="selected">---Class---</option>
      <option value="SE">SE</option>
      <option value="TE">TE</option>
      <option value="BE">BE</option>
    </select><br><br><br>
    <button name="submit">ADD</button>
    <button name="delete">DELETE</button>
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

    $fname = $_POST['name'];
    $Roll_no = $_POST['Rollno'];
    $class = $_POST['Class'];
    if($class=='SE')
    {
      $sql = "CREATE TABLE IF NOT EXISTS StudentSE(name VARCHAR(30),Roll_no CHAR(3),Class CHAR(2))";
    if (mysqli_query($con, $sql))  {
      $sql = "SELECT * FROM StudentSE WHERE Roll_no='$Roll_no'";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) 
      {
        echo "<script>alert('Already taken');</script>";
      }
      else
      {

    $sql="INSERT INTO StudentSE(name,Roll_no,Class)VALUES('$fname','$Roll_no','$class')";  
    echo '<script>alert("Data inserted successfully");</script>';   
    } 
   }else {
        echo "Error creating table: " . mysqli_error($con);
    }   
    $sql=mysqli_query($con,$sql);
      mysqli_close($con); 
    }
  else if($class=='TE'){
      $sql = "CREATE TABLE IF NOT EXISTS StudentTE(name VARCHAR(30),Roll_no CHAR(3),Class CHAR(2))";
    if (mysqli_query($con, $sql))  {
      $sql = "SELECT * FROM StudentTE WHERE Roll_no='$Roll_no'";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) 
      {
        echo "<script>alert('Already taken');</script>";
      }
      else
      {

    $sql="INSERT INTO StudentTE(name,Roll_no,Class)VALUES('$fname','$Roll_no','$class')";  
    echo '<script>alert("Data inserted successfully");</script>';   
    } }else {
        echo "Error creating table: " . mysqli_error($con);
    }   
    $sql=mysqli_query($con,$sql);
      mysqli_close($con); 
    }
  else
  {
    $sql = "CREATE TABLE IF NOT EXISTS StudentBE(name VARCHAR(30),Roll_no CHAR(3),Class CHAR(2))";
    if (mysqli_query($con, $sql))  {
      $sql = "SELECT * FROM StudentBE WHERE Roll_no='$Roll_no'";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) 
      {
        echo "<script>alert('Already taken');</script>";
      }
      else
      {

    $sql="INSERT INTO StudentBE(name,Roll_no,Class)VALUES('$fname','$Roll_no','$class')";  
    echo '<script>alert("Data inserted successfully");</script>';   
    }} else {
        echo "Error creating table: " . mysqli_error($con);
    }   
    $sql=mysqli_query($con,$sql);
      mysqli_close($con); 
    }
      
  }
  if(isset($_POST['delete']))
  {
    $fname = $_POST['name'];
    $Roll_no = $_POST['Rollno'];
    $class = $_POST['Class'];

    if($class=='SE')
    {
      $sql = "SELECT * FROM StudentSE WHERE Roll_no='$Roll_no'";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) < 1) 
      {
        echo "<script>alert('No student found');</script>";
      }
      else
      {

    $sql="DELETE FROM StudentSE WHERE Roll_no=$Roll_no ";
    echo '<script>alert("Data deleted successfully");</script>';   
    }  
    $sql=mysqli_query($con,$sql);
      mysqli_close($con); 
    }
      
  else if($class=='TE'){
      $sql = "SELECT * FROM StudentTE WHERE Roll_no='$Roll_no'";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) < 1) 
      {
        echo "<script>alert('No student Found');</script>";
      }
      else
      {

    $sql="DELETE FROM StudentTE WHERE Roll_no=$Roll_no";  
    echo '<script>alert("Data deleted successfully");</script>';   
    }  
    $sql=mysqli_query($con,$sql);
      mysqli_close($con); 
    }
  else
  {
      $sql = "SELECT * FROM StudentBE WHERE Roll_no='$Roll_no'";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) < 1) 
      {
        echo "<script>alert('No student Found');</script>";
      }
      else
      {

    $sql="DELETE FROM StudentBE WHERE Roll_no=$Roll_no";  
    echo '<script>alert("Data deleted successfully");</script>';   
    } 
    $sql=mysqli_query($con,$sql);
      mysqli_close($con); 
    }
      
  }
  }
?>
</html>