<?php


session_start();

function ctrlValidation($request, $response, $container) {
    $login = $container-> login();
    $username = $request -> get(INPUT_POST, "username");
    $password = $request -> get(INPUT_POST, "password");

    $login = $login->login($username, $password);
 
    if($login){
        $_SESSION["is_auth"] = true;
        $_SESSION["role"] = $login["Rol"];
        $_SESSION["login"] = $username;
        if($_SESSION["role"]=="admin"){
            header("Location: index.php?r=adminpanel");
            return $response;
        }else{
            header("Location: index.php");
            return $response;
        }
    }else{
        header("Location: index.php?r=login");
    }


    

}

