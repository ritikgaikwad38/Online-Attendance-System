<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Side Navigation Bar</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fontawesome.com/v4.7.0/icon/table">
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
.wrapper .main_content .info
{
  margin-top: 100px;
  margin-left: 200px;
  height: 200px;
  font-size: 50px;
}

label
{
  font-weight: bold;
}
.Roll_no 
{
  margin-left: 200px;
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
  margin-left: 450px;
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
        <div class="header"></div>  
        <div class="info">
          
   
  <a href="CLASSSE.php" class="a1">SE</a>&emsp;&emsp;
  <a href="CLASSTE.php" class="a1">TE</a><br><br><br><br><br><br><br>
  <br><br>&emsp;&emsp;&emsp;
  <a href="CLASSBE.php" class="a1">BE</a>
</div>
    </div>
   </div>

</body>
</html>