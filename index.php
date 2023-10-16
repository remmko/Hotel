<?php
    include "src/controls/index.php";
    error_reporting(E_ERROR | E_PARSE);
    $r = $_REQUEST["r"];

    if($r==""){
        ctrlIndex();
    }
?>