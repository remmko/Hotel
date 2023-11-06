<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css" rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="app/app.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Mukta&family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <title>Apartaments Figuerencs</title>
</head>
    <body>
       <?php include "mainmenu.php"?>

                <div class="nav">
            <div class="container-input">
                <input type="text" placeholder="Buscar" name="text" class="input">
                <button> 
                    <img src="img/lupa.png">
                </button>
            </div>
        </div>
       
     

            <?php
            
            $id = 0; 
            for ($i = 0; $i < $count; $i++) {
                ?>
                <script>
                    var button = document.createElement("button");
                    button.setAttribute("type", "button");
                    button.setAttribute("class", "btn custom-button");
                    button.setAttribute("data-bs-toggle", "modal");
                    button.setAttribute("data-bs-target", "#exampleModal");
                    button.setAttribute("onclick","reserve(<?php echo $id+1?>)")

                    var img = document.createElement("img");
                    img.setAttribute("src", '<?php 
                    echo $result[$id]["img"];
                    ?>');
                    img.setAttribute("alt", "");

                    var infoDiv = document.createElement("div");
                    infoDiv.setAttribute("class", "info");

                    var infoHeaderDiv = document.createElement("div");
                    infoHeaderDiv.setAttribute("class", "infoheader");

                    var h4 = document.createElement("h4");
                    h4.textContent = "<?php
                         echo $result[$id]["Titulo"];
                        ?>";

                    var priceP = document.createElement("p");
                    priceP.textContent = "<?php
                      echo $result[$id]["PrecioDiaTemporadaAlta"];?>€";

                    infoHeaderDiv.appendChild(h4);
                    infoHeaderDiv.appendChild(priceP);

                    var infoFinalDiv = document.createElement("div");
                    infoFinalDiv.setAttribute("class", "infofinal");

                    var locationP = document.createElement("p");
                    locationP.textContent = "<?php
                        echo $result[$id]["DireccionPostal"];?>";

                    var detailsP = document.createElement("p");
                    detailsP.textContent = "Habitacions: <?php
                        echo $result[$id]["NumeroHabitaciones"];?>";

                    infoFinalDiv.appendChild(locationP);
                    infoFinalDiv.appendChild(detailsP);

                    button.appendChild(img);
                    button.appendChild(infoDiv);
                    infoDiv.appendChild(infoHeaderDiv);
                    infoDiv.appendChild(infoFinalDiv);
                    document.body.appendChild(button);

                </script>
                <?php
                
                
                $id ++;
            }
            ?>

             

            

           

      
        
            <script src="app/reserve.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>