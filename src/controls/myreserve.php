<?php

    function myreserve($request, $response, $container){
     
        $getMyReserve = $container -> getMyReserve();
        $getInfo = $container -> getInfo();
        $getInfo = $getInfo ->getInfo($_SESSION["login"]);

        $userID = $getInfo["ID"];

        $getMyReserve = $getMyReserve -> getMyReserve($userID);
        $countMyReserve = $container -> countMyReserve();
        $countMyReserve = $countMyReserve -> countMyReserve($userID);


        $getRooms = $container -> getRooms();
        $getRooms = $getRooms -> getRooms();

        include "src/views/myreserve.php";

    }

    function deleteReserve($request, $response, $container){
        if(isset($_GET["reserveID"])){
            $deleteReserve = $container -> deleteReserve();
            $deleteReserve -> deleteReserve($_GET["reserveID"]);
            $response -> redirect("Location: index.php?r=myreserve");
            return $response;
        }else{
            $response->redirect("Location: index.php");
            return $response;
        }
    }