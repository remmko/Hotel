<?php
    function ctrlConfirm($request, $response, $container){
        $reserve = $container -> reserve();
        $getRoom = $container -> getRoom();
        $count = $container -> countReserve();
        $getReserve = $container -> getReserve();
        $getInfo = $container -> getInfo();
        if(isset($_GET["start"])&&isset($_GET["end"])&&isset($_GET["roomID"])&&isset($_GET["days"])&&isset($_GET["price"])){
            $count = $count -> countReserve();
            $getReserve = $getReserve -> getReserve($_GET['roomID']);
            for ($i = 0; $i< $count["COUNT(ID)"]; $i++){

                if(strtotime($getReserve[$i]["FechaSalida"])>strtotime($_GET["start"])){
                    $response->redirect("Location: index.php?r=reserve&&roomId=".$_GET["roomID"]."&&free=false");
                    return $response;
                }else{
                    $getRoom = $getRoom -> getRoom($_GET["roomID"]);
                    $getInfo = $getInfo -> getInfo($_SESSION['login']);
                    $userid = $getInfo["ID"];
                    $reserve -> reserve($_GET["start"], $_GET["end"], $_GET["roomID"], $_GET["price"], $userid);
                    header("Location: index.php?r=reserved");
                }
            }
            

            
        }
    }