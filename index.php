<?php
    error_reporting(E_ERROR | E_PARSE);
    include "src/controls/index.php";
    include "src/controls/login.php";
    include "src/controls/registration.php";
    include "src/controls/reserva.php";
    $r = $_REQUEST["r"];

    if($r==""){
        ctrlIndex();
    }else if($r == "login"){
        ctrlLogin();
    }else if ($r=="registration"){
        ctrlRegistation();
    } else if ($r=="reserva"){
        ctrlReserva();
    }
    
?>