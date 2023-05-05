<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Custom Page-Acme Arts</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<script>
$(document).ready(function(){
    $("#artist_dropdown").change(function(){
        var selected=$(this).val();
        $("#main").load("filterartist.php",{selected_artist: selected});
    });
    $("#refresh").click(function(){
        $("#main").load("selectallpaintings.php");
    });
});
</script>
    <body style = "background:lightgray;">
        <?php 
            include_once('navbar.php');
        ?>
        <div class="container">
            <h1 class="page-header text-center">Select Appropriate Button to Make Changes in Subscriber Details</h1>
            <form class="d-flex" style = "font-size:20px;margin-top:0.8rem"action="filtersubscriber.php" method="post">
                <input class="form-control me-2" style = "font-size:20px;" type="search" id="searchbox"name = "searchbox" placeholder="Search Subscriber Email">
                <button class="btn btn-primary" name = "searchbtn" type="submit">Search</button>
            </form>
            <div class="row">
                <?php 
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
            <div class="col-sm-10">
                <a class="navbar-brand" href="emailTest.php" style="color:white; font-size: 20px;"> Email Test </a>
            </div>
            <table class="table bg-success" style="margin-top:20px;">
                <thead>
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
                                    <td><?php echo $row['subscriberName']; ?></td>
                                    <td><?php echo $row['subscriberEmail'];?></td>
                                    <td>
                                        <?php  
                                            if ($row['subscriberMonthly'] == 1) {
                                                echo "Subscribed";
                                            } else {
                                                echo "Not Subscribed =(";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php  
                                            if ($row['subscriberBreaking'] == 1) {
                                                echo "Subscribed";
                                            } else {
                                                echo "Not Subscribed =(";
                                            }
                                        ?>
                                    </td>
									<td>
						    			<a href="#editsubscriber_<?php echo $row['subscriberEmail'];?>" class="btn btn-primary btn-sm" data-bs-toggle="modal"><span><i class="fa fa-edit"></i></span> Edit</a>
						    			<a href="#deletesubscriber_<?php echo $row['subscriberEmail']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><span><i class="fa fa-trash"></i></span> Delete</a>
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