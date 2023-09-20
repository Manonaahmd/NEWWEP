<?php
include_once("conn.php");

// get phone index data
$sql = "SELECT * FROM `phone index`";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($stmt->fetchAll() as $k){
    ?>
      <tr>
        <td><?php echo $k["fullname"] ?></td>
        <td><?php echo $k["phone_no"] ?></td>
        <td><?php echo $k["email"] ?></td>
        <td> <a hrefv= "mmona.php?id=<?php echo $k["id"]?>">Delete</a>
      </tr>
    <?php
        }
    ?>      
    </tbody>
  </table>
</div>

</body>
</html>
