<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css" rel="stylesheet" href="style/myreserve.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Mukta&family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <title>Apartaments Figuerencs</title>

</head>
<?php include "mainmenu.php"?>
    <body>
        

        <div id="content">

        </div>

        <script>

            var reserve = <?php echo json_encode($getMyReserve)?>;
            var count = <?php echo $countMyReserve["COUNT(ID)"]?>;
            var rooms = <?php echo json_encode($getRooms)?>;

            var IDs = rooms.map(el => el.ID);

            create();

            function create(){
                var content = document.getElementById("content");
                content.innerHTML="";
                var newTable = document.createElement("newTable");
                content.appendChild(newTable);
                var newTr = document.createElement("tr");
                newTable.appendChild(newTr);
                var newTh = document.createElement("th");
                newTr.appendChild(newTh);
                newTh.textContent="Foto";
                newTh = document.createElement("th");
                newTr.appendChild(newTh);
                newTh.textContent="Entering day";
                newTh = document.createElement("th");
                newTr.appendChild(newTh);
                newTh.textContent="Exiting day";
                newTh = document.createElement("th");
                newTr.appendChild(newTh);
                newTh.textContent="Price";
                newTh = document.createElement("th");
                newTr.appendChild(newTh);
                newTh.textContent="Address";
                newTh = document.createElement("th");
                newTr.appendChild(newTh);
                newTh.textContent="";

                var newTd;

                for (var i = 0; i<count; i++){
                    var scndTr = document.createElement("tr");
                    newTable.appendChild(scndTr);

                    newTd = document.createElement("img");
                    scndTr.appendChild(newTd);
                    newTd.src=rooms[IDs.indexOf(reserve[i].IDApartamento)].img;
                    newTd.setAttribute("style", "width:100px");
                    newTd.setAttribute("style", "height:100px");

                    newTd = document.createElement("td");
                    scndTr.appendChild(newTd);
                    newTd.textContent=reserve[i].FechaEntrada;

                    newTd = document.createElement("td");
                    scndTr.appendChild(newTd);
                    newTd.textContent=reserve[i].FechaSalida;

                    newTd = document.createElement("td");
                    scndTr.appendChild(newTd);
                    newTd.textContent=reserve[i].PrecioTotal+"€";

                    newTd = document.createElement("td");
                    scndTr.appendChild(newTd);
                    newTd.textContent=rooms[IDs.indexOf(reserve[i].IDApartamento)].DireccionPostal;

                    newTd = document.createElement("td");
                    scndTr.appendChild(newTd);
                    newTd.textContent="Cancel reserve";
                    newTd.setAttribute("id","hover");
                    newTd.setAttribute("onclick", "deleteReserve("+i+")");
                }
            }

           
            function deleteReserve(i){
                if(confirm("Do you want to cancel you reserve to "+reserve[i].FechaEntrada+"?")){
                    window.location="index.php?r=deleteReserve&&reserveID="+reserve[i].ID;
                }
            }


        </script>

            
    </body>
</html>