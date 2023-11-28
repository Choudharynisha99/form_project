<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>

 <style>
 	
body{
	margin: 0;
	padding: 0;
	font-family: monsterrat;
	background: linear-gradient(120deg,#2980b9,#8e44ad);
	height: 100vh;
	overflow: hidden;
}


.center{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	background: white;
	border-radius: 10px;
}

.center h1{
	text-align: center;
	padding: 0 0 20px 0;
	border-bottom: 1px solid silver;

}

.center form{
	padding: 0 40px;
	box-sizing: border-box;
}

form .txt_field{
	position: relative;
	border-bottom: 2px solid #adadad;
	margin: 30px 0;
}

.txt_field input{
	width: 100%;
	padding: 0 5px;
	height: 40px;
	font-size: 16px;
	border: none;
	background: none;
	outline: none;
}

.txt_field label{
	position: absolute;
	top: 50%;
	left: 5px;
	color: #adadad;
	transform: translateY(-50%);
	font-size: 16px;
	pointer-events:none ;
	transition: .5s;
}

.txt_field span::before{
content: '';
position: absolute;
top: 40px;
left: 0;
width: 100%;
height: 2px;
background: #2691d9;
transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
top: -5px;
color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
	width: 100%;

}
 
 .pass{
 	margin: -5px 0 20px 5px;
 	color: #a6a6a6;
 	cursor: pointer;
 }

.pass:hover{
	text-decoration: underline;
}

.submit{
	width: 100%;
	height: 50px;
	border: 1px solid;
	background: #2691d9;
	border-radius: 25px;
	font-size: 18px;
	color: #e9f4fb;
	font-weight: 700;
	cursor: pointer;
	outline: none;
}

.submit:hover{
	border-color: #2691d9;
	transition: .5s;
}

.signup_link{
	margin: 30px 0;
	text-align: center;
	font-size: 16px;
	color: #666666;
}

.signup_link a{
color: #2691d9;
text-decoration: none;
}

.signup_link a:hover{
	text-decoration: underline;
}



 </style>


</head>
<body>

<div class="center">
	<h1>Sign In</h1>
	<form method="POST">
		<div class="txt_field">
			<input type="text" name="name" required>
			<span></span>
			<label>Username</label>
		</div>
		<div class="txt_field">
			<input type="email" name="email" required>
			<span></span>
			<label>Email</label>
		</div>
		<div class="txt_field">
			<input type="password" name="pass" required>
			<span></span>
			<label>Password</label>
		</div>
		<div class="pass">Forgot Password</div>
		<input type="submit" class= "submit" value="Login" name="sbm">
		<div class="signup_link">
			Not a member? 
			<a href="login.php">Sigin</a>
		</div>
	</form>
</div>

</body>
</html>

<?php 

$con =mysqli_connect("localhost","root","","metaphor") or die("Error");

 if(isset($_REQUEST["sbm"])){

 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$pass = $_POST['pass'];

 	echo $name;
 	echo $email;
 	echo $pass;

 	$query = mysqli_query($con,
 		"INSERT INTO login(name,email,pass) VALUES('$name','$email','$pass')");

 	if($query){

         echo "<script>alert('Successful');window.location.href='login.php';</script>";		
 		}
 		else{

 			echo "<script>alert('Failed')</script>";
 		}
 }





 ?>
