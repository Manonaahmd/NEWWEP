<?php 
Session_start();

/*
if($_SERVER["REQUEST_METHOD"] === "POST"){
echo $_POST["num"];
setcookie("fullname", "mona ahmed" , time () + (86400 * 2), "/");
if(isset($_COOKIE["age"])){
echo $_COOKIE["age"];
}
}
*/
echo $_COOKIE["fullname"];
$_SESSION["age"]= 28;
echo $_SESSION["age"];
$_SESSION["login"]=true;
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
  <h2>Number</h2>
  <form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="POST">
    <div class="form-group">
      <label for="num">Number:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter number" name="num">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>