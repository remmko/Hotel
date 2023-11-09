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
       

        <div id="mainBody">
            
        </div>
    </div>


    <script>

        allRooms();
        var rooms;
        function allRooms(){
            rooms = <?php echo json_encode($getRooms)?>;
            var count = <?php echo $countRooms["COUNT(addedBy)"]?>;
            var mainBody = document.getElementById("mainBody");
            mainBody.innerHTML="";
            for (var i = 0; i<count; i++){
                var button = document.createElement("button");
                button.setAttribute("type", "button");
                button.setAttribute("class", "btn custom-button");
                button.setAttribute("data-bs-toggle", "modal");
                button.setAttribute("data-bs-target", "#exampleModal");
                button.setAttribute("onclick","deleteRoom("+i+")");

                var img = document.createElement("img");
                img.setAttribute("src", rooms[i].img);
                img.setAttribute("alt", "");

                var infoDiv = document.createElement("div");
                infoDiv.setAttribute("class", "info");

                var infoHeaderDiv = document.createElement("div");
                infoHeaderDiv.setAttribute("class", "infoheader");

                var h4 = document.createElement("h4");
                h4.textContent = rooms[i].Titulo;

                var priceP = document.createElement("p");
                priceP.textContent = rooms[i].PrecioDiaTemporadaBaja+"€";

                infoHeaderDiv.appendChild(h4);
                infoHeaderDiv.appendChild(priceP);

                var infoFinalDiv = document.createElement("div");
                infoFinalDiv.setAttribute("class", "infofinal");

                var locationP = document.createElement("p");
                locationP.textContent = rooms[i].DireccionPostal;

                var detailsP = document.createElement("p");
                detailsP.textContent = "Habitacions: "+rooms[i].NumeroHabitaciones;

                infoFinalDiv.appendChild(locationP);
                infoFinalDiv.appendChild(detailsP);

                button.appendChild(img);
                button.appendChild(infoDiv);
                infoDiv.appendChild(infoHeaderDiv);
                infoDiv.appendChild(infoFinalDiv);
                mainBody.appendChild(button);
            }
        }


        function deleteRoom(i){
            if(confirm("Do you want ro delete room "+rooms[i].Titulo)){
                window.location ="index.php?r=deleteRoom&&roomID="+rooms[i].ID;
            }
        }
    </script>

</body>
</html>