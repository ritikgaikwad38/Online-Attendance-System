<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
	*{
	box-sizing: border-box;
}
body{
	margin: 0;
	padding: 0;
	font-family: 'lota', sans-serif;
}
.container{
	display: flex;
	height:100vh;
}
.left-section{
	overflow:hidden;
	display:flex;
	justify-content: center;
	flex-wrap: wrap;
	flex-direction: column;
	animation-name: left-section;
	animation-duration: 1s;
	animation-fill-mode: both;
	animation-delay: 1s; 
}
.right-section{
	flex:1;
	transition:1s;
	background-image: url(../events-slider2.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
.header> h1{
	margin: 0;
	color:#f50629;
}
.header> h4{
	margin-top: 10px;
	color: rgba(0,0,0,0.4);
	font-size: 15px;
	font-weight: normal;
}
.form{
	max-width: 80%;
	display: flex;
	flex-direction: column;
}
.form>p{
	text-align: right;
}
.form> p > a{
	color: #000;
	font-size: 14px;
}

.form-field{
	height: 46px;
	padding: 0px 16px;
	border: 2px solid #ddd;
	border-radius: 4px;
	outline: none;
	transition: 0.2s;
	margin-top: 20px;
}

.form-field:focus{
	border-color: #0f7ef1;

}

.form> button{
	padding: 12px 10px;
	border:0;
	background: linear-gradient(to right, #f50629 0%, #fd9d08 100%);
	border-radius: 3px;
	margin-top: 10px;
	color:#fff;
	letter-spacing: 1px;
	cursor: pointer;
}
.animation{
	animation-name: move;
	animation-duration: 0.4s;
	animation-fill-mode: both;
	animation-delay: 2s; 	
}

.a1{
	animation-delay: 2s;
}
.a2{
	animation-delay: 2.1s;
}
.a3{
	animation-delay: 2.2s;
}
.a4{
	animation-delay: 2.3s;
}
.a5{
	animation-delay: 2.4s;
}
.a6{
	animation-delay: 2.5s;
}

@keyframes move {
	0%{
		opacity:0;
		visibility: hidden;
		transform: translateY(-40px);
	}

	100%{
		opacity:1;
		visibility: visible;
		transform: translateY(0);
	}


}


@keyframes left-section {
	0%{
		opacity:0;
		width:0;
	}

	100%{
		opacity:1;
		padding: 20px 40px;
		width: 440px;
	}


}

</style>
<body>
<div class="container">
	<div class="left-section">
		<div class="header">
			<h1 class="animation a1">Teachers Login!</h1>
			<h4 class="animation a2">Viva Institute Of Technology <br> Computer Engineering Depatment</h4>
		</div>
	
		<form method="POST" action="">
		<div class="form">
			<input type="text" name="username" placeholder="Username" class="form-field animation a3">
			<input type="password" name="password" placeholder="Password" class="form-field animation a4"><br><br>
			
			<input type="submit" name="submit" value="login" class="btn-login"/>
		</div>
	</div>	
		<div class="right-section"></div>
</div>

</body>
<?php 

$host="localhost";
$user="root";
$password="";
$db="yogesh";

mysqli_connect($host,$username,$password);
mysqli_select_db($db);

if(isset($_POST['username'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where username='".$uname."'AND Password='".$password."' limit 1";

    $result=mysqli_query($sql);

    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
exit();
    }
else{
        echo " You Have Entered Incorrect Password";
exit();
    }

}
?>

</html>
