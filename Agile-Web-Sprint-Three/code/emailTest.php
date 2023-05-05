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
    <body style = "background:lightgray;">
        <?php 
            include_once('navbar.php');
        ?>
        <div class="container">
            <h1 class="page-header text-center">Sending Email Test</h1>
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
            <p><span style="font-weight:bold;">Subscribed To All News</p>
            <table class="table bg-success" style="margin-top:20px;">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sending Success</th>
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
                                if (($row['subscriberMonthly'] == 1) && ($row['subscriberBreaking'] == 1)) {

                                ?>
                                <tr>
                                    <td><?php echo $row['subscriberName']; ?></td>
                                    <td><?php echo $row['subscriberEmail'];?></td>
                                    <td><?php echo "Sent";?></td>
                                </tr>
                                <?php 
                            }
                            }
                        }
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        //close connection

                    ?>
                </tbody>
            </table>
            <p><span style="font-weight:bold;">Subscribed to just Monthly News</p>
            <table class="table bg-success" style="margin-top:20px;">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sending Success</th>
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
                                if (($row['subscriberMonthly'] == 1) && ($row['subscriberBreaking'] == 0)) {

                                ?>
                                <tr>
                                    <td><?php echo $row['subscriberName']; ?></td>
                                    <td><?php echo $row['subscriberEmail'];?></td>
                                    <td><?php echo "Sent";?></td>
                                </tr>
                                <?php 
                            }
                            }
                        }
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        //close connection

                    ?>
                </tbody>
            </table>
            <p><span style="font-weight:bold;">Subscribed to just Breaking News</p>
            <table class="table bg-success" style="margin-top:20px;">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Sending Success</th>
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
                                if (($row['subscriberBreaking'] == 1) && ($row['subscriberMonthly'] == 0)) {

                                ?>
                                <tr>
                                    <td><?php echo $row['subscriberName']; ?></td>
                                    <td><?php echo $row['subscriberEmail'];?></td>
                                    <td><?php echo "Sent";?></td>
                                </tr>
                                <?php 
                            }
                            }
                        }
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        //close connection
                        

                    ?>
                </tbody>
            </table>
            <?php $database->close();?>
        </div>
        <script src = "js/bootstrap.bundle.min.js"></script>
        <script src = "sprinttwo.js"></script>
    </body>
</html>