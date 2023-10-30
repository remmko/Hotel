<?php
    function ctrlAdmin(){
        include "src/views/adminpanel.php";
    }


// Подключение к базе данных
$servername = "projectdb.ddns.net";
$username = "hoteladmin";
$password = "opensource";
$database = "hotel";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}



// Обработка POST-запроса
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы
    $titulo = $_POST['Titulo'];
    $direccionPostal = $_POST['DireccionPostal'];
    $latitud = $_POST['Latitud'];
    $longitud = $_POST['Longitud'];
    $descripcion = $_POST['Descripcion'];
    $metrosCuadrados = $_POST['MetrosCuadrados'];
    $numeroHabitaciones = $_POST['NumeroHabitaciones'];
    $precioDiaTemporadaBaja = $_POST['PrecioDiaTemporadaBaja'];
    $precioDiaTemporadaAlta = $_POST['PrecioDiaTemporadaAlta'];

    // Загрузка изображения
    $img = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($img_tmp, "img/$img");

    // SQL-запрос для вставки данных в базу данных
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
        
        echo "Отель успешно добавлен в базу данных!";
    } catch (PDOException $e) {
        echo "Ошибка при добавлении отеля: " . $e->getMessage();
    }
}
?>
