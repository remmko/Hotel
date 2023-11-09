<?php
    function deleteUser($request, $response, $container){

        if($_SESSION["role"]=="admin"){
            if(isset($_GET["userID"])){
                $id = $_GET["userID"];
                $deleteUser = $container -> deleteUser();
                $deleteUser -> deleteUser($id);
                $response -> redirect("Location: index.php?r=adminpanel&&action=true");
                return $response;
            }else{
                $response -> redirect("Location: index.php");
                return $response;
            }
        }else{
            $response -> redirect("Location: index.php");
            return $response;
        }

    }


    function toGestor($request, $response, $container){
        if($_SESSION["role"]=="admin"){
            if(isset($_GET["userID"])){
                $id = $_GET["userID"];
                $toGestor = $container -> toGestor();
                $toGestor -> toGestor($id);
                $response -> redirect("Location: index.php?r=adminpanel&&action=true");
                return $response;
            }else{
                $response -> redirect("Location: index.php");
                return $response;
            }
        }else{
            $response -> redirect("Location: index.php");
            return $response;
        }
    }



    function toClient($request, $response, $container){
        if($_SESSION["role"]=="admin"){
            if(isset($_GET["userID"])){
                $id = $_GET["userID"];
                $toClient = $container -> toClient();
                $toClient -> toClient($id);
                $response -> redirect("Location: index.php?r=adminpanel&&action=true");
                return $response;
            }else{
                $response -> redirect("Location: index.php");
                return $response;
            }
        }else{
            $response -> redirect("Location: index.php");
            return $response;
        }
    }


    function deleteRoom($request, $response, $container){
        if($_SESSION["role"]=="admin"){
            if(isset($_GET["roomID"])){
                $id = $_GET["roomID"];
                $deleteRoom = $container -> deleteRoom();
                $deleteRoom -> deleteRoom($id);
                $response -> redirect("Location: index.php?r=adminpanel&&action=room");
                return $response;
            }else{
                $response -> redirect("Location: index.php");
                return $response;
            }
        }else{
            $response -> redirect("Location: index.php");
            return $response;
        }
    }