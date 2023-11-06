<?php

    function ctrlIndex($request, $response, $container){
        $row = $container -> countRooms();
        $temp = $row -> countRooms();
        $count = $temp["COUNT(ID)"];
        
        $row = $container -> getRooms();
        $result = $row -> getRooms();

        include "src/views/index.php";
    }

