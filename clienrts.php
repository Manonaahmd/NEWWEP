<?php
    include_once("conn.php");
    try{
    $sql = "SELECT * FROM clients";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $status = true;
    }catch(PDOException $e){
        $errMsg = "Failed to get data from clients: " . $e->getMessage();
        $status = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Clients</h2>
  <p>Data fetched from the DB</p>
  <?php 
    if($status){
  ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Contact Person</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Website</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($stmt->fetchAll() as $row){
    ?>
      <tr>
        <td><?php echo $row["clientName"] ?></td>
        <td><?php echo $row["contactPerson"] ?></td>
        <td><?php echo $row["phone"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["website"] ?></td>
        <td><?php echo $row["address"] ?></td>
      </tr>
    <?php
        }
    ?>  
    </tbody>
  </table>
  <?php
    }else{
    ?>
  <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo $errMsg ?>.
  </div>
  <?php
    }
  ?>
</div>

</body>
</html>
