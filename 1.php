<?php
Session_start();
if(isset($_SESSION["login"])and $_SESSION = ["login"] == true){
    echo "Welcome mona";

}else{
    header('location:number11.php');
}


?>