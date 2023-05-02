<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Custom Page-Acme Arts</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style = "background:lightgray;">
        <?php 
            include_once('navbar.php');
        ?>
        <div class="container">
            <h1 class="page-header text-center">Select Appropriate Button to Make Changes in Subscriber Details</h1>
            <div class="row">
                <?php 
                    session_start();
                    if(isset($_SESSION['message'])){
                        ?>
                        <div class="alert alert-info text-center" style="margin-top:20px;">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                ?>
            </div>
            <table class="table bg-success" style="margin-top:20px;">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Monthly</th>
                    <th>Breaking</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php
                        //include our connection
                        include_once('connection.php');

                        $database = new Connection();
                        $db = $database->open();
                        try{	
                            $sql = 'SELECT * FROM subscriberstable';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['idSubscriber']; ?></td>
                                    <td><?php echo $row['subscriberName']; ?></td>
                                    <td><?php echo $row['subscriberEmail'];?></td>
                                    <td><?php echo $row['subscriberMonthly']; ?></td>
                                    <td><?php echo $row['subscriberBreaking']; ?></td>
									<td>
						    			<a href="#editsubscriber_<?php echo $row['idSubscriber'];?>" class="btn btn-primary btn-sm" data-bs-toggle="modal"><span><i class="fa fa-edit"></i></span> Edit</a>
						    			<a href="#deletesubscriber_<?php echo $row['idSubscriber']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><span><i class="fa fa-trash"></i></span> Delete</a>
						    		</td>
                                    <?php
										include('editsubscribermodal.php');
                                    ?>
                                    <?php
                                    	include('deletesubscribermodal.php');
									?>
                                </tr>
                                <?php 
                            }
                        }
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        //close connection
                        $database->close();

                    ?>
                </tbody>
            </table>
        </div>
        <script src = "js/bootstrap.bundle.min.js"></script>
        <script src = "sprinttwo.js"></script>
    </body>
</html>