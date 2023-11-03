<?php
function ctrlUser($request, $response, $container){
    $user = $container -> getInfo();
    $result = $user -> getInfo($_SESSION["login"]);
    include "src/views/usermod.php";
}