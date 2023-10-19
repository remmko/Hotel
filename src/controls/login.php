<?php
    
    function ctrlLogin(){
        include "src/views/login.php";
        
    }


    $servername = "projectdb.ddns.net"; 
    $username = "hoteladmin"; 
    $password = "opensource"; 
    $database = "hotel"; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       

        if (isset($_POST["submit"])){
            if(isset($_POST["login"])&&isset($_POST["password"])){
                $query = "select password from Usuario where login = '".$_POST['login']."';";
                $result = $conn->query($query);
                $row = $result->fetch();               
                if($row[0]==$_POST['password']){
                    echo "Succesful";
                }else{
                    echo "Wrong login or password";
                }
            }
        }
        
        $conn = null;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>