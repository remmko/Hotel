<?php

function ctrlDoRegistration($request, $response, $container){

    
    $user = $request->get(INPUT_POST, "user");
    $name = $request->get(INPUT_POST, "name");  
    $surename = $request->get(INPUT_POST, "surename");
    $email = $request->get(INPUT_POST, "email");
    $pass = $request->get(INPUT_POST, "pass");
    $phone = $request->get(INPUT_POST, "phone");
    $address = $request->get(INPUT_POST, "address");
    $address2 = $request->get(INPUT_POST, "address2");
    $city = $request->get(INPUT_POST, "city");
    $zip = $request->get(INPUT_POST, "zip");

    $userModel = $container->users();

    $userModel = $userModel->register($user, $name, $surename, $email, $pass, $phone, $address, $address2, $city, $zip);
    if($userModel) {

        $response->setSession("user", $userModel);
        $response->setSession("logged", true);
        $response->redirect("location: index.php");
    } else {
        $response->redirect("location: index.php?r=registration");
    }

    return $response;
}