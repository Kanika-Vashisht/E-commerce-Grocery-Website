<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

 	body{
		background: url('https://www.linkpicture.com/q/bg1_12.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;  
  		background-size: 100% 100%;
	}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#button{
		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		opacity: 5;
		border: none;
		opacity: 5;
		color: #000000;
	}

	.box{
		border-radius: 15px;
		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
		margin-top: 140px;
		background: rgba(120, 120, 120, 0.6);
	}

	</style>

	<div class="box">
		
		<form method="post">
			<center><div style="font-size: 30px;margin: 10px;color: black;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php" >Click to Login</a><br><br></center>
		</form>
	</div>
</body>
</html>