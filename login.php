<?php 
include 'User.php';
$user= new User();



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="containter">
		<div class="row mt-5">
			<div class="card col-5 offset-lg-4">
				<?php 
				//USER HIT LOGIN BUTTON
					if (isset($_POST['submit'])){
						$user_name=$_POST['user_name'];
						$password=$_POST['password'];
						echo $user->loginCheck($user_name, $password);
					}

				 ?>
				<form method="POST" action="" class="form-group">
					<h2>User Login</h2>
					<input class="form-control" placeholder="User Name" type="text" name="user_name" required><br>
					
					<input class="form-control" placeholder="Password" type="password" name="password" required><br>
					<input class="btn btn-success" type="submit" name="submit"value="Login">
				</form>
			</div>
		</div>
		
	</div>
</body>
</html>