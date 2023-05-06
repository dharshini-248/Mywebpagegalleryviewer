<?php

session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
	//something was posted
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];

if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
{
//save to database
	$user_id=random_num(20);
	$query="insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
	mysqli_query($con, $query);
	header("Location: login.php");
}else
{
	echo "please enter some valid information!";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Signup</title>
</head>
<body>
	<style type="text/css">
		#text{
			height:25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;


		}
		#button
		{
			padding:10px;
			width: 100px;
			color: white;
			background-color: #1DEA84;
			border: none;
			margin-left: 30%;
			font-size: 20px

		}
		#box{
			background-color: grey;
			margin-top: 80px;
			margin-left: 400px;
			width: 300px;
			padding: 20px; 
			height:250px;

		}
		body {
  background-image: url('nin3.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
   margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
	</style>
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;text-align: center;">Signup</div>
			<input id="text" type="text" name="user_name" placeholder="User Name" required><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required><br><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<a href="login.php" style="color: #1DEA84">Click here to login</a><br><br>
		</form>

	</div>

</body>
</html>