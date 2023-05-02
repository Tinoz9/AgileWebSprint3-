<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['removesubscriber'])){//remove name of the button in removesubscriber modal
		$database = new Connection();
		$db = $database->open();
		try{
			$type1=$_POST['subscriberEmail'];
			$query="DELETE FROM subscriberstable 
    		WHERE subscriberEmail = '$type1'";
			$step=$db->prepare($query);
			$step->bindParam(':subscriberEmail',$type1,PDO::PARAM_INT, 20);
			if($step->execute()){
               $_SESSION['message'] = 'Subscriber Deleted successfully';
			}
			else{
			$_SESSION['message']  = 'Not able to add data please contact Admin ';
				}
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