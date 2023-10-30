<?php
    session_start();

    $servername = "projectdb.ddns.net"; 
    $username = "hoteladmin"; 
    $password = "opensource"; 
    $database = "hotel"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($_SESSION["is_auth"]==true){
            $query = "select Nombre from Usuario where id = ".$_SESSION["userid"].";";
            $result = $conn->query($query);
            $row = $result->fetch();   
            $usuario_nombre = $row[0];
        }
        

      
        
        
        $conn = null;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    function ctrlUser(){
        include "src/views/usermod.php";
    }
?>

