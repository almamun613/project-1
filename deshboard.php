<?php 

include 'checkUserLogin.php';
include 'User.php';
$user= new User();


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Deshboard </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h3>Deshboard (<?php echo $_SESSION['user_name']; ?>)- <a href="logout.php">Logout</a></h3>


	<div class="containter">
		<div class="row mt-5">
			<div class="card col-5 offset-lg-4">
				<?php 
				//USER HIT LOGIN BUTTON
					if (isset($_POST['submit'])){
						$name=$_POST['name'];
						
$res= $user->newExpense($_SESSION['id'],$name);
						 if($res){
						 	echo "Added....";
						 }
					}

				 ?>
				<form method="POST" action="" class="form-group form-inline">
					<input class="form-control" placeholder="New Expence" type="text" name="name" required><br>
					
					<input class="btn btn-success" type="submit" name="submit"value="Add">
				</form>
			</div>
		</div>
		
	</div>


</body>
</html>