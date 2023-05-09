<?php  
	session_start();
	include_once('connection.php');
	if(isset($_POST['editsubscriber'])){
		$database = new Connection();
		$db = $database->open();
		try{
            $id = $_GET['subscriberEmail'];
			$subscriberName = $_POST['subscriberName'];
			$subscriberEmail = $_POST['subscriberEmail'];
			$subscriberMonthly = $_POST['subscriberMonthly'];
			$subscriberBreaking = $_POST['subscriberBreaking'];
            if(!isset($subscriberMonthly) && !isset($subscriberBreaking)) {
				$_SESSION['message'] = 'Operation Invalid';
			} else {
                $sql = "UPDATE subscriberstable
                SET subscriberName = :subscriberName,
                subscriberEmail = :subscriberEmail,
                subscriberMonthly = :subscriberMonthly,
                subscriberBreaking = :subscriberBreaking
                WHERE subscriberEmail = '$id'";
                $step=$db->prepare($sql);
                $step->bindParam(':subscriberName',$subscriberName,PDO::PARAM_STR, 20);
                $step->bindParam(':subscriberEmail',$subscriberEmail,PDO::PARAM_STR, 20);
                $step->bindParam(':subscriberMonthly',$subscriberMonthly,PDO::PARAM_INT, 20);
                $step->bindParam(':subscriberBreaking',$subscriberBreaking,PDO::PARAM_INT, 20);
                if($step->execute()){
                    $_SESSION['message'] = 'Subscriber details updated as requested successfully';
                }
                else{
                    $_SESSION['message']  = 'Not able to add data please contact Admin ';
                }
            }
        } catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
    }
	else{
		$_SESSION['message'] = 'Fill up update details first';
	}

	header('location: admin.php');

?> 