<?php

Class Connectionadmin{
	private $server = "mysql:host=localhost;dbname=sprint3db";
	private $username = "sprintthreeadmin";
	private $password = "agilethree";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function openadmin(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "There is some problem in Admin Connection: " . $e->getMessage();
 		}
 
    }
 
	public function closeadmin(){
   		$this->conn = null;
 	}
}
?>