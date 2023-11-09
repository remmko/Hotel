<?php
    session_start();
    

function ctrlAdmin($request, $response, $container){
    $getUsers = $container -> getUsers();
    $getUsers = $getUsers -> getUsers();

    $getRooms = $container -> getRooms();
    $getRooms = $getRooms -> getRooms();


    $countRooms = $container -> countRooms();
    $countRooms = $countRooms -> countRooms();

    $countUsers = $container -> countUsers();
    $countUsers = $countUsers -> countUsers();
    
    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }

    include "src/views/adminpanel.php";


    if ($_SESSION["is_auth"]&&$_SESSION["role"]=="admin"){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['Titulo'];
            $direccionPostal = $_POST['DireccionPostal'];
            $latitud = $_POST['Latitud'];
            $longitud = $_POST['Longitud'];
            $descripcion = $_POST['Descripcion'];
            $metrosCuadrados = $_POST['MetrosCuadrados'];
            $numeroHabitaciones = $_POST['NumeroHabitaciones'];
            $precioDiaTemporadaBaja = $_POST['PrecioDiaTemporadaBaja'];
            $precioDiaTemporadaAlta = $_POST['PrecioDiaTemporadaAlta'];

            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, "img/$img");

            $getInfo = $container -> getInfo();
            $getInfo = $getInfo -> getInfo($_SESSION["login"]);
            $userID = $getInfo["ID"];

            $addHotel = $container -> addHotel();
            $addHotel = $addHotel -> addHotel($titulo, $direccionPostal, $latitud, $longitud, $descripcion, $metrosCuadrados, $numeroHabitaciones, $precioDiaTemporadaBaja, $precioDiaTemporadaAlta, $img, $userID);
            $response -> redirect("Location: index.php?r=adminpanel&&action=room");
            return $response;
        }  
    }

}





?>
