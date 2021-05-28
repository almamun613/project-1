<?php 

 /**
  * 
  */
 include 'Connection.php';
 class Database 
 {
 	Use Connection;

 	public $conn="";
 	public function __construct(){
 		$this->conn = $this->databaseCon();
 	}
 	//REGISTER AN USER
 	public function register($username, $email, $fullname, $password){
 		$sql="INSERT INTO users(user_name,password,email,full_name)VALUES(:user_name,:password,:email,:full_name)";

 		$statement= $this->conn->prepare($sql);
 		$statement->execute(array(
 			':user_name' => $username,
 			':password' => md5($password),
 			':email'	=> $email,
 			':full_name' => $fullname,

 		));
 		return 'success';
 	}
 	//Check Username Exists
 	public function checkUserName($userName){
 		$sql="SELECT user_name FROM users WHERE user_name='$userName'";

 		$statement= $this->conn->prepare($sql);
 		$statement->execute();

 		$res = $statement->fetchAll();
 		return count($res);


 	}


 }  

 ?>