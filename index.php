<?php
    error_reporting(E_ERROR | E_PARSE);
    include "src/controls/index.php";

    include "src/controls/login.php";
    include "src/controls/registration.php";


    error_reporting(E_ERROR | E_PARSE);

    $r = $_REQUEST["r"];

    if($r==""){
        ctrlIndex();
    }else if($r == "login"){
        ctrlLogin();
    }else if ($r=="registration"){
        ctrlRegistation();
    }
?>