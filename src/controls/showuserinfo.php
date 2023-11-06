<?php
function ctrlUser($request, $response, $container){
    $user = $container -> getInfo();
    $result = $user -> getInfo($_SESSION["login"]);
    if($_SESSION["is_auth"]){
        include "src/views/usermod.php";
    }else{
        header("Location: index.php?r=login");
    }
}