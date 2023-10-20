<?php

   
    error_reporting(E_ERROR | E_PARSE);
    require "../src/config.php";
    include "../src/controls/index.php";
    include "../src/controls/login.php";
    include "../src/controls/registration.php";
    include "../src/controls/reserva.php";
    include "../src/controls/adminpanel.php";
    include "../src/controls/usermod.php";

    $r = $_REQUEST["r"];

    
   
    $container = new Emeset\Container($config);
    
    $response = new Emeset\response();
    $request = new Emeset\request();
    

    if($r==""){
        $response = ctrlIndex($request, $response, $container);
    }else if($r == "login"){
        $response = ctrlLogin($request, $response, $container);
    }else if ($r=="registration"){
        $response = ctrlRegistration($request, $response, $container);
    }else if ($r=="usermod"){
        $response = ctrlUsermod($request, $response, $container);
    }else if ($r=="reserva"){
        $response = ctrlReserva($request, $response, $container);
    } 
    
    $response->response();
    
   ?>