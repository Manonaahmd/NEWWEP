<?php
include_once("conn.php");
if($_SERVER["REQUEST_METHOD"]=== "GET"){
  // Get reference to uploaded image
  $image_file = $_FILES["image"]; //image is the form input file element name
  
  // Exit if no file uploaded
  if (!isset($image_file)) {
      die('No file uploaded.');
  }
  
  // Exit if image file is zero bytes
  if (filesize($image_file["tmp_name"]) <= 0) {
      die('Uploaded file has no contents.');
  }
  
  // Exit if is not a valid image file
  $image_type = exif_imagetype($image_file["tmp_name"]);
  if (!$image_type) {
      die('Uploaded file is not an image.');
  }
  
  // Get file extension based on file type, to prepend a dot we pass true as the second parameter
  $image_extension = image_type_to_extension($image_type, true);
  
  // Create a unique image name
  $image_name = bin2hex(random_bytes(16)) . $image_extension;
  
  // Move the temp image file to the images directory
  move_uploaded_file(
      // Temp image location
      $image_file["tmp_name"],
  
      // New image location
      __DIR__ . "/imgs/" . $image_name
  );

    $sql = "SELECT * FROM `phone index`";
    $stmt =$conn->prepare($sql);
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
        <th>fullname</th>
        <th>mobile</th>
        <th>email</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
    foreach($stmt->fetchAll() as $row){
        ?>
        <tr>
        <td><?php echo $row ["FullName"]?></td>
        <td><?php echo $row ["Phone"]?></td>
        <td><?php echo $row ["Email"]?></td>
        <td> <a href= "mmona.php?id=<?php echo $row["id"]?>">Delete</a></td>
        </tr>
    <?php
    }
  }
    ?>
    
    </tbody>
  </table>
</div>
</body>
</html>

