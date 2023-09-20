<?php
include_once("conn.php");
    $sql = "SELECT * FROM  `imgs`";
    $stmt =$conn->prepare($sql);
    $stmt->execute();
    $i=1;
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
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php
    //display all imag from thDB
    foreach($stmt->fetchAll() as $row){
        if($i==1){
            $status="active";
        }else{
            $status="";
        }
        $i++;
        ?>
      <div class="item <?php echo $status?>">
        <img src="imgs/<?php echo $row ["imgs"]?> " alt="<?php echo $row ["title"]?>" style="width:100%;">
        <div class="carousel-caption">
          <h3><?php echo $row ["title"]?></h3>
          <p><?php echo $row ["description"]?></p>
        </div>
      </div>

      <?php
}
      ?>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
