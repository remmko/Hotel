<?php


session_start();

function ctrlLogin() {
    include "src/views/login.php";
}




$servername = "projectdb.ddns.net";
$username = "hoteladmin";
$password = "opensource";
$database = "hotel";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    

    if (isset($_POST["submit"])) {
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            $query = "select password from Usuario where login = '" . $_POST['login'] . "';";
            $result = $conn->query($query);
            $row = $result->fetch();
            if ($row[0] == hash('sha256', $_POST['password'])) {
                echo "true";
                $_SESSION["is_auth"] = true;
                $query = "select id from Usuario where login = '" . $_POST['login'] . "';";
                $result = $conn->query($query);
                $row = $result->fetch();
                $_SESSION["userid"] = $row[0];
                $_SESSION["login"] = $_POST["login"];

                $query = "SELECT Rol FROM Usuario WHERE id = " . $_SESSION["userid"];
                $result = $conn->query($query);
                $row = $result->fetch();
                $_SESSION["role"]= $row["Rol"];

                if ($row && $row["Rol"] === "gestor") {
                    header("Location: index.php?r=adminpanel"); 
                    exit();
                } else {
                    header("Location: index.php?r=usermod");
                    exit();
                }
            } else {
                $_SESSION["is_auth"] = false;
                echo "Wrong login or password";
            }
        }
    }




    $conn = null;
} catch (PDOException $e) {
    echo "ErrorLogin: " . $e->getMessage();
}
?>
