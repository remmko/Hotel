<?php
if(isset($_GET["roomId"])){
    $id = $_GET["roomId"];
    if($_SESSION["is_auth"]){
        include "src/views/reserve.php";
    }else{
        header("Location: index.php?r=login");
    }
}
?>