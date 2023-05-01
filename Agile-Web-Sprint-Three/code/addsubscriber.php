<script>
    console.log("Here-SQL");
</script>
<?php
	session_start();
	include_once('connection.php');
	if(isset($_POST['addsubscriber'])){//addsubscriberbutton name of the button in addsubscriber modal
		$database = new Connection();
		$db = $database->open();
		try{
			$type1=$_POST['subscriberName'];
			$type2=$_POST['subscriberEmail'];
			$type3=$_POST['subscriberMonthly'];
			$type4=$_POST['subscriberBreaking'];
			$query="Insert Into subscriberstable (subscriberName, subscriberEmail, subscriberMonthly, subscriberBreaking)
    		Values (:subscriberName, :subscriberEmail, :subscriberMonthly, :subscriberBreaking)";
			$step=$db->prepare($query);
			$step->bindParam(':subscriberName',$type1,PDO::PARAM_STR, 20);
			$step->bindParam(':subscriberEmail',$type2,PDO::PARAM_STR, 20);
			$step->bindParam(':subscriberMonthly',$type3,PDO::PARAM_INT, 20);
			$step->bindParam(':subscriberBreaking',$type4,PDO::PARAM_INT, 20);
			if($step->execute()){
               $_SESSION['message'] = 'Subscriber added successfully';
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
		$_SESSION['message'] = 'Fill up Add Subscriber form first';
	}

	header('location: customsubscriber.php');
	
?>