<?php 

include 'Connection.php';
 class User
 {
 	Use Connection;

 	public $conn="";
 	public function __construct(){
 		$this->conn = $this->databaseCon();
 	}
 	public function loginCheck($userName,$password){
 		$password= md5($password);
 		$sql="SELECT * FROM users WHERE user_name='$userName' AND password='$password'";

 		$statement= $this->conn->prepare($sql);
 		$statement->execute();

 		$res = $statement->fetchAll();
 		//return 
 		if(count($res)==1){
 			session_start();
 			foreach ($res as $value) {
 				$_SESSION['user_name'] =$value['user_name'];
 				$_SESSION['id']= $value['id'];
 			}
 			header("location:deshboard.php");

 		}else{
 			echo "Login Failed!";
 		}

 	}

 	public function newExpense($user_id,$name){
 		$sql="INSERT INTO expenses (user_id,name) VALUES (:user_id,:name)";

 		$statement= $this->conn->prepare($sql);
 		$statement->execute(array(
 			':user_id'=> $user_id,
 			':name'=> $name
 		));
 		return 'success';
 	}

}
 ?>