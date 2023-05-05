<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['subscriberEmail'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM subscriberstable WHERE subscriberEmail = '".$_GET['subscriberEmail']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Subscriber deleted successfully' : 'Something went wrong. Cannot delete Subscribers';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Select Subscriber to delete first';
	}
	header('location: admin.php');
?>