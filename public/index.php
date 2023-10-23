<?php

   
    error_reporting(E_ERROR | E_PARSE);
    require "../src/config.php";
    include "../src/controls/index.php";
    include "../src/controls/CtrlLogin.php";
    include "../src/controls/ctrlRegistration.php";
    include "../src/controls/reserva.php";
    include "../src/controls/adminpanel.php";
    include "../src/controls/usermod.php";
    include "../src/controls/CtrlDoLogin.php";
    include "../src/controls/CtrlDoRegistration.php";

    include "../src/middleware/isLogged.php";

  
    include "../src/Emeset/Request.php";
    include "../src/Emeset/Response.php";
    include "../src/Emeset/Container.php";

    $response = new Emeset\response();
    $request = new Emeset\request();
    $container = new Emeset\Container($config);

    $r = '';
    if (isset($_REQUEST["r"])) {
      $r = $_REQUEST["r"];
    }

   
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
    }else if ($r=="dologin"){
        $response = CtrlDoLogin($request, $response, $container);
    }else if ($r=="doregistration"){
        $response = CtrlDoRegistration($request, $response, $container);
    }
    
    $response->response();
    
   ?>