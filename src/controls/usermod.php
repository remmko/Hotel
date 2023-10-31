<?php
    session_start();

    function ctrlUser(){
        include "src/views/usermod.php";
    }

    $servername = "projectdb.ddns.net"; 
    $username = "hoteladmin"; 
    $password = "opensource"; 
    $database = "hotel"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
         
        
        

      
        
        
        $conn = null;
    } catch (PDOException $e) {
        echo "ErrorUserMode: " . $e->getMessage();
    }
  
?>

