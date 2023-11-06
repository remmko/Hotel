<?php

    function ctrlChangeinfo($request, $response, $container){
        $user = $container-> change();
        $name = $request -> get(INPUT_POST, "name");
        $surename = $request -> get(INPUT_POST, "surename");
        $phone = $request ->get (INPUT_POST, "phone");
        $email = $request -> get(INPUT_POST, "email");
        $address = $request -> get(INPUT_POST, "address");
        $address2 = $request -> get (INPUT_POST, "address2");
        $city = $request -> get(INPUT_POST, "city");
        $zip = $request -> get(INPUT_POST, "zip");
        $login = $request -> get(INPUT_POST, "login");
        $password = $request -> get(INPUT_POST, "password");
        
        $password = hash("sha256", $password);
    
        $user -> change($name, $surename, $phone, $email, $address, $address2, $city, $zip, $login, $password);
        header("Location: index.php?r=userinfo");
        return $response;

    }


