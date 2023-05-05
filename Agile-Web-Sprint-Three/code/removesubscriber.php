<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['removesubscriber'])){//remove name of the button in removesubscriber modal
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM subscriberstable WHERE subscriberEmail = '".$_POST['subscriberEmailName']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Subscriber deleted successfully' : 'Something went wrong. Cannot delete User';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up form first';
	}

	header('location: customsubscriber.php');
	
?>