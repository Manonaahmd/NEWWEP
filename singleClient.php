<?php
    include_once("conn.php");
    try{
        $sql = "SELECT * FROM clients where clientName like ? and phone like ?";
        $clName = "%Pepsi%";
        $phone = "%0118%";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$clName, $phone]);
        if ($stmt->rowCount() == 0) {
            echo "No results found";
        }else{
            $result = $stmt->fetch();
            echo $result["clientName"] . "<br>";
            echo $result["phone"] . "<br>";
            echo $result["email"] . "<br>";
        }
    }catch(PDOException $e){
        echo "Failed to get data from clients: " . $e->getMessage();
    }
?>