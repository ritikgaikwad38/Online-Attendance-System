<!DOCTYPE html>
<html>
<style>
.form{
margin-top:100px;
border:3px solid black;
margin-left:400px;
height:300px;
width:500px;
}
input,button{
margin-top:10px;
margin-left:130px;
text-align:center;
}
input{
width:250px;
height:30px;
font-size: 20px;
}
button{
margin-left:200px;
width:100px;
height:40px;
font-size: 20px;
}
</style>
<body>
<form method="POST" action="" class="form">
<h1 style="text-align:center;">Admin Login</h1>
<input type="text" name="user" placeholder="USERNAME" required autocomplete="off"><br><br>
<input type="password" name="password" placeholder="PASSWORD" required autocomplete="off"><br><br>
<button type="submit" name="submit"><b>Submit</b></button>
</form>
</body>
<?php
if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$password=$_POST['password'];
if($user=='Admin' && $password=='Admin')
{
	echo '<script>alert("login Successfull");</script>';
}
else
{
	echo '<script>alert("check your username and password");</script>';	
}
}
?>
</html>