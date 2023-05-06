<?php
session_start();

include("connection.php");
include("function.php");


$user_data=check_login($con);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 	<title>My website</title>
 	<style type="text/css">
 		body {
  background-image: url('img_girl.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
 	</style>
 </head>
 <body>
 
 <h1>This is the index page</h1>
 <a href="logout.php">Logout</a>
 <br>
 Hello,<?php echo $user_data['user_name']; ?>
 </body>
 </html>