<?php
function ctrlReserve($request, $response, $container){
    if(isset($_GET["roomId"])&&isset($_GET["free"])){
        $free = $_GET["free"];
        $id = $_GET["roomId"];
        if($_SESSION["is_auth"]){
            $row = $container -> getRoom();
            $result = $row -> getRoom($id);
            include "src/views/reserve.php";
        }else{
            header("Location: index.php?r=login");
        }
    }elseif(isset($_GET["roomId"])){
        $id = $_GET["roomId"];
        if($_SESSION["is_auth"]){
            $row = $container -> getRoom();
            $result = $row -> getRoom($id);
            include "src/views/reserve.php";
        }else{
            header("Location: index.php?r=login");
        }
    }
}

