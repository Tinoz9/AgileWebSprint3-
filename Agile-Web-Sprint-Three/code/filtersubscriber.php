<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>ACME ARTS - HOME PAGE</title>
</head>
<body style = "background:lightgray;">

<?php
include_once('navbar.php');
?>
<div class = "container">
<table class="table bg-success" style="margin-top:20px;">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Monthly</th>
        <th>Breaking</th>
    </thead>
    <tbody>

<?php
    include_once('connection.php');
    $database = new Connection();
    $db = $database->open();
    if(isset($_POST['searchbtn']))
    {
        $email = $_POST['searchbox'];
        try
        {
          $sql = "SELECT * FROM subscriberstable
          WHERE subscriberEmail LIKE '%{$email}%'";
          foreach ($db->query($sql) as $row){
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
        </tr>
        <?php
        }
        }
        catch(PDOException $ex){
            echo "There is some problem in connection". $ex->getMessage();
          }
       
    }
    
    $db = $database->close();

   
?>
</div>
<script src = "js/bootstrap.bundle.min.js"></script>
</body>
</html>