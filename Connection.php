<?php

trait Connection{
	public $pdo = "";
	public $host= 'localhost';
	public $dbName= 'ctg';
	public $dbUserName= 'root';
	public $dbPassword= '';



	public function databaseCon(){
		$conn = new PDO("mysql:host=$this->host; dbname=$this->dbName", $this->dbUserName, $this->dbPassword);

		return $conn;
	}

}


?>