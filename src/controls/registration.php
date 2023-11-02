<?php
 
 function ctrlRegister($request, $response, $container){

    $registration = $container-> registration();
    $name = $request -> get(INPUT_POST, "name");
    $surename = $request -> get(INPUT_POST, "surname");
    $phone = $request ->get (INPUT_POST, "phone");
    $email = $request -> get(INPUT_POST, "email");
    $address = $request -> get(INPUT_POST, "address");
    $address2 = $request -> get (INPUT_POST, "address2");
    $city = $request -> get(INPUT_POST, "city");
    $zip = $request -> get(INPUT_POST, "zip");
    $login = $request -> get(INPUT_POST, "login");
    $password = $request -> get(INPUT_POST, "password");

    $defaultRol = "cliente";

    $password = hash("sha256", $password);

    $registration -> add($name, $surename, $phone, $email, $defaultRol, $address, $address2, $city, $zip, $login, $password);

    $response -> redirect("location: index.php");
    return $response;


 }


 


   

?>