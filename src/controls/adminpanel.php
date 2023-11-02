<?php
    session_start();
    

function ctrlAdmin(){
    include "src/views/adminpanel.php";
}

$servername = "projectdb.ddns.net";
$username = "hoteladmin";
$password = "opensource";
$database = "hotel";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error database connection: " . $e->getMessage());
}


if ($_SESSION["is_auth"]&&$_SESSION["role"]=="gestor"){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['Titulo'];
        $direccionPostal = $_POST['DireccionPostal'];
        $latitud = $_POST['Latitud'];
        $longitud = $_POST['Longitud'];
        $descripcion = $_POST['Descripcion'];
        $metrosCuadrados = $_POST['MetrosCuadrados'];
        $numeroHabitaciones = $_POST['NumeroHabitaciones'];
        $precioDiaTemporadaBaja = $_POST['PrecioDiaTemporadaBaja'];
        $precioDiaTemporadaAlta = $_POST['PrecioDiaTemporadaAlta'];

        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($img_tmp, "img/$img");

        $sql = "INSERT INTO Apartamento (Titulo, DireccionPostal, Latitud, Longitud, Descripcion, MetrosCuadrados, NumeroHabitaciones, PrecioDiaTemporadaBaja, PrecioDiaTemporadaAlta, img) 
                VALUES (:titulo, :direccionPostal, :latitud, :longitud, :descripcion, :metrosCuadrados, :numeroHabitaciones, :precioDiaTemporadaBaja, :precioDiaTemporadaAlta, :img)";
        
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':titulo' => $titulo,
                ':direccionPostal' => $direccionPostal,
                ':latitud' => $latitud,
                ':longitud' => $longitud,
                ':descripcion' => $descripcion,
                ':metrosCuadrados' => $metrosCuadrados,
                ':numeroHabitaciones' => $numeroHabitaciones,
                ':precioDiaTemporadaBaja' => $precioDiaTemporadaBaja,
                ':precioDiaTemporadaAlta' => $precioDiaTemporadaAlta,
                ':img' => "img/".$img
            ]);
            
            echo "Succesful added!";
        } catch (PDOException $e) {
            echo "Add hotel error: " . $e->getMessage();
        } 
    }  
}


?>
