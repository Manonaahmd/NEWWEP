<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multiplication Table</title>
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
        <th>Multiplication Table for:time table </th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td> 
    </td>
      </tr>
      <br>
      <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["num"])) {
        $num = (int)$_POST["num"];
        
        if ($num > 0) {
            echo "<table>";
            echo "<tr>";
            for ($col = 1; $col <= $num; $col++) {
                $result = $num * $col;
                echo "<td>{$num} x {$col} = {$result}</td>";
            }
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Error: Please enter a positive number.";
        }
    } else {
        echo "Error: No number entered.";
    }
}
?>
    </tbody>
  </table>
</div>

</body>
</html>
