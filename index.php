<?php
    error_reporting(E_ERROR | E_PARSE);
    include "src/config.php";
    include "src/controls/index.php";
    include "src/controls/login.php";
    include "src/controls/registration.php";
    include "src/controls/usermod.php";
    include "src/controls/adminpanel.php";
    include "src/controls/reserve.php";
    include "src/controls/registerForm.php";
    include "src/controls/loginForm.php";
    include "src/controls/showuserinfo.php";
    include "src/controls/userReservation.php";
    


    $request = new \Emeset\Request();
    $response = new \Emeset\Response();
    $container = new \Emeset\Container($config);

    $r = $_REQUEST["r"];

    if($r==""){
        ctrlIndex($request, $response, $container);
    }else if($r == "login"){
        if($_SESSION["is_auth"]){
            if($_SESSION["role"]=="gestor"){
                header("Location: index.php?r=adminpanel");
            }else{
                header("Location: index.php?r=usermod");
            }
        }else{
            echo false;
            ctrlLogin($request, $response, $container);
        }
       
    }else if ($r=="registration"){
        ctrlRegistration($request, $response, $container);
    }else if ($r=="userinfo"){
        ctrlUser($request, $response, $container);
    }else if ($r=="adminpanel"){
        if($_SESSION["is_auth"]&&$_SESSION["role"]=="gestor"){
            ctrlAdmin();
        }else{
            header("Location: index.php");
        }
        
    }else if($r == "logout"){
        session_destroy();
        header("Location: index.php");
    }else if($r == "register"){
        ctrlRegister($request, $response, $container);
    }else if($r =="validation"){
        ctrlValidation($request, $response, $container);
    }else if ($r == "usermod"){
        ctrlChangeinfo($request, $response, $container);
    }else if($r == "myreserve"){
        showReserve();
    }else if($r == "reserve"){
        ctrlReserve($request, $response, $container);
    }


?>