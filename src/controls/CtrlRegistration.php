<?php

function ctrlRegistration($request, $response, $container){

    $response->setTemplate("registration.php");

    return $response;    
}