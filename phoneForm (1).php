<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Phone Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Insert Phone</h2>
  <form action="test1.php" method="POST">
    <div class="form-group">
      <label for="usr">Full Name:</label>
      <input type="text" class="form-control" id="usr" name="fullName">
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
    <div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="web">Fax:</label>
      <input type="text" class="form-control" id="fax" name="fax">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="form-group">
      <label for="contact">Comments:</label>
      <input type="text" class="form-control" id="comment" name="comment">
    </div>
    <div>
        <input type="submit" name="submit" id="" value="Insert">
    </div>
  </form>
</div>

</body>
</html>
