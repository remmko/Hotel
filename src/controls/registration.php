<?php
    function ctrlRegistation(){
        include "src/views/registration.php";
    }


    $servername = "projectdb.ddns.net"; 
    $username = "hoteladmin"; 
    $password = "opensource"; 
    $database = "hotel"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Succesful";
      
       

        if (isset($_POST["submit"])){
            if(isset($_POST["login"])&&isset($_POST["name"])&&isset($_POST["surename"])&&isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["phone"])&&isset($_POST["address"])&&isset($_POST["address2"])&&isset($_POST["city"])&&isset($_POST["zip"])){
                $sql = "INSERT INTO Usuario (Nombre,Apellidos,Telefono,CorreoElectronico,Rol,Direccion,Direccion2,Ciudad,CodigoPostal,login,password)
                                            (".$_POST['name'].",".$_POST['surename'].",".$_POST['phone'].",".$_POST['email'].",'cliente',".$_POST['address'].",".$_POST['address2'].",".$_POST['city'].",".$_POST['zip'].",".$_POST['login'].",".$_POST['passowrd'].");";
                $stmt = $conn->prepare($sql);
                $stmt->execute();

               
            }
        }
        
        $conn = null;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

 


   

?>