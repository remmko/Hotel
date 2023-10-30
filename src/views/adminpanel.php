<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css" rel="stylesheet" href="style/adminpanel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Mukta&family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <title>Apartaments Figuerencs</title>
</head>
<body>
    <?php include "mainmenu.php"?>

    <h1>Add Apartment</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="Titulo">Titulo: </label>
        <input type="text" name="Titulo" required><br>
        
        <label for="DireccionPostal">DireccionPostal: </label>
        <input type="text" name="DireccionPostal" required><br>
        
        <label for="Latitud">Latitud: </label>
        <input type="text" name="Latitud" required><br>
        
        <label for="Longitud">Longitud: </label>
        <input type="text" name="Longitud" required><br>
        
        <label for="Descripcion">Descripcion: </label>
        <textarea name="Descripcion" required></textarea><br>
        
        <label for="MetrosCuadrados">MetrosCuadrados: </label>
        <input type="number" name="MetrosCuadrados" required><br>
        
        <label for="NumeroHabitaciones">NumeroHabitaciones: </label>
        <input type="number" name="NumeroHabitaciones" required><br>
        
        <label for="PrecioDiaTemporadaBaja">PrecioDiaTemporadaBaja: </label>
        <input type="number" name="PrecioDiaTemporadaBaja" required><br>
        
        <label for="PrecioDiaTemporadaAlta">PrecioDiaTemporadaAlta: </label>
        <input type="number" name="PrecioDiaTemporadaAlta" required><br>
        
        <label for="img">Image: </label>
        <input type="file" name="img" required><br>
        
        <input type="submit" value="Add">
    </form>
</body>
</html>

