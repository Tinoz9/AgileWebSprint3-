<table class="table bg-success" style="margin-top:20px;">
				<thead>
                <th>idSubscriber</th>
                <th>subscriberName</th>
                <th>subscriberEmail</th>
                <th>subscriberMonthly</th>
                <th>subscriberBreaking</th>
				</thead>
				<tbody>
<?php
          include_once('connection.php');
          $database = new Connection();
          $db = $database->open();
          try
          {
            $sql = "SELECT * FROM subscriberstable 
            ";
            foreach ($db->query($sql) as $row){
              ?>
            <tr>
              <td><?php echo $row['idSubscriber'];?></td>
              <td><?php echo $row['subscriberName'];?></td>
              <td><?php echo $row['subscriberEmail'];?></td>
              <td><?php echo $row['subscriberMonthly'];?></td>
              <td><?php echo $row['subscriberBreaking'];?></td>
            </tr>
            <?php
            }
          }
          catch(PDOException $ex){
            echo "There is some problem in connection". $ex->getMessage();
          }
          $database->close();
          ?>
      </tbody>
    </table>