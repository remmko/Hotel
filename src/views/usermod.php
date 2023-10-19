<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "mainmenu.php"?>

    <form>
        <h1>Datos del perfil</h1>
        <p>Nombre: <?php echo $_SESSION["name"]?></p>
        <p>Apellidos: <?php echo $_SESSION["surename"]?></p>
        <p>Email: <?php echo $_SESSION["email"]?></p>
        <p>Teléfono: <?php echo $_SESSION["phone"]?></p>
        <p>Dirección: <?php echo $_SESSION["address"]?></p>
        <p>Dirección 2: <?php echo $_SESSION["address2"]?></p>
        <p>Ciudad: <?php echo $_SESSION["city"]?></p>
        <p>Código postal: <?php echo $_SESSION["zip"]?></p>
        <p>Login: <?php echo $_SESSION["login"]?></p>
        <p>Password: <?php echo $_SESSION["password"]?></p>

        <form method="post">
            <input type="submit" value="Modificar datos">
        <form method="post">
            <input type="submit" value="Cerrar sesión">
        </form>
    </form>
    
</body>
</html>