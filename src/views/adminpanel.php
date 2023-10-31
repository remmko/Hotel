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
    <div id="body">
        <div class="menu">
            <div class="menu-item" onclick ="addroom()">Add Rooms</div>
            <div class="menu-item" onclick="allRooms()">Apartments</div>
            <div class="menu-item"onclick ="reservations()">Reservations</div>
            <div class="menu-item"onclick="allUsers()">Users</div>
        </div>

        <div id="mainBody">
            
        </div>
    </div>
<script src="app/adminpanel.js"></script>
</body>
</html>



<?php
             $servername = "projectdb.ddns.net";
             $username = "hoteladmin";
             $password = "opensource";
             $database = "hotel";
         
             try {
                 $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
             } catch (PDOException $e) {
                 die("Error: " . $e->getMessage());
             }

             
            $query = "SELECT COUNT(ID) from Apartamento";
            $result = $conn->query($query);
            $row = $result->fetch();
        
            $count = $row[0];
           
            $id = 1; 
            for ($i = 0; $i < $count; $i++) {
                ?>
                <script>
                    var id = <?php echo $id; ?>;
                    var mainBody = document.getElementById("mainBody");
                    mainBody.innerHTML="";
                    var button = document.createElement("button");
                    button.setAttribute("type", "button");
                    button.setAttribute("class", "btn custom-button");
                    button.setAttribute("data-bs-toggle", "modal");
                    button.setAttribute("data-bs-target", "#exampleModal");
                    button.setAttribute("onclick","reserve(<?php echo $id?>)")

                    var img = document.createElement("img");
                    img.setAttribute("src", '<?php
                        $query = "SELECT img from Apartamento where id =".$id.";";
                        $result = $conn->query($query);
                        $row = $result->fetch();

                        $count = $row[0];
                        echo $count;?>');
                    img.setAttribute("alt", "");

                    var infoDiv = document.createElement("div");
                    infoDiv.setAttribute("class", "info");

                    var infoHeaderDiv = document.createElement("div");
                    infoHeaderDiv.setAttribute("class", "infoheader");

                    var h4 = document.createElement("h4");
                    h4.textContent = "<?php
                        $query = "SELECT Titulo from Apartamento where id =".$id.";";
                        $result = $conn->query($query);
                        $row = $result->fetch();

                        $count = $row[0];
                        echo $count;?>";

                    var priceP = document.createElement("p");
                    priceP.textContent = "<?php
                        $query = "SELECT PrecioDiaTemporadaBaja from Apartamento where id =".$id.";";
                        $result = $conn->query($query);
                        $row = $result->fetch();

                        $count = $row[0];
                        echo $count;?>€";

                    infoHeaderDiv.appendChild(h4);
                    infoHeaderDiv.appendChild(priceP);

                    var infoFinalDiv = document.createElement("div");
                    infoFinalDiv.setAttribute("class", "infofinal");

                    var locationP = document.createElement("p");
                    locationP.textContent = "<?php
                        $query = "SELECT DireccionPostal from Apartamento where id =".$id.";";
                        $result = $conn->query($query);
                        $row = $result->fetch();

                        $count = $row[0];
                        echo $count;?>";

                    var detailsP = document.createElement("p");
                    detailsP.textContent = "Habitacions: <?php
                        $query = "SELECT NumeroHabitaciones from Apartamento where id =".$id.";";
                        $result = $conn->query($query);
                        $row = $result->fetch();

                        $count = $row[0];
                        echo $count;?>";

                    infoFinalDiv.appendChild(locationP);
                    infoFinalDiv.appendChild(detailsP);

                    button.appendChild(img);
                    button.appendChild(infoDiv);
                    infoDiv.appendChild(infoHeaderDiv);
                    infoDiv.appendChild(infoFinalDiv);
                    mainBody.appendChild(button);

                </script>
                <?php
                 $query = "SELECT COUNT(ID) from Apartamento";
                 $result = $conn->query($query);
                 $row = $result->fetch();
             
                 $count = $row[0];
                $id++; 
            }
            ?>




