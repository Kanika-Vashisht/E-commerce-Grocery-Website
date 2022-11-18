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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	body{
		background: url('https://www.linkpicture.com/q/bg1_12.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;  
  		background-size: 100% 100%;
	}
	/*div.box{
		background: url('https://www.linkpicture.com/q/Grey_full.png') repeat;
  		border: 2px solid black;
		
	}*/
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		font-weight: bold;
		color: #000000;
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
		
		margin-top: 100px;
		margin-left: 500px;
		width: 300px;
		height: 300px;
		padding: 20px;
		border-radius: 20px;
		background: rgba(120, 120, 120, 0.6);
		
	}

	</style>

	<div class="box">
		<form method="post">
			<center>
			<div style="font-size: 30px;margin: 10px;color: black;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<div >
				<p>Don't have an account?<a  href="signup.php">Sign up</a></p>
			</div>
			</center>
		</form>
		
	</div>
</body>
</html>