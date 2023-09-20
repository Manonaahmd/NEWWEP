<?php
include_once("conn.php");
try{
    $sql = "SELECT * FROM clients where FullName like ? and Phone like ?";
    $clName = "%slaw%";
    $stmt=$conn->prepare($sql);
    $stmt->execute([$clName]);

    if($stmt->rowCount() == 0){
        echo "No results found";
    }else{
         $result = $stmt->fetch();
    echo $result["Email"]."<br>";
    echo $result["Phone"];
}
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>