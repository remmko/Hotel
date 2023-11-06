<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartaments Figuerencs</title>
    <link rel="stylesheet" type="text/css" href="/style/calendar.css">
    <link rel="stylesheet" href="/style/reserve.css">
    <link rel="stylesheet" href="/style/style.css">
    <script type="text/javascript" src="../../app/calendar.js"></script>
 
</head>
<body>
<?php include "mainmenu.php" ?>
<h1>Reserve</h1>


<div id="content">
     <script>
        var content = document.getElementById("content");
        var button = document.createElement("button");
        button.setAttribute("type", "button");
        button.setAttribute("class", "btn custom-button");
        button.setAttribute("data-bs-toggle", "modal");
        button.setAttribute("data-bs-target", "#exampleModal");
        var img = document.createElement("img");
        img.setAttribute("src", '<?php 
        echo $result["img"];
        ?>');
        img.setAttribute("alt", "");

        var infoDiv = document.createElement("div");
        infoDiv.setAttribute("class", "info");

        var infoHeaderDiv = document.createElement("div");
        infoHeaderDiv.setAttribute("class", "infoheader");

        var h4 = document.createElement("h4");
        h4.textContent = "<?php
                echo $result["Titulo"];
            ?>";

        var priceP = document.createElement("p");
        priceP.textContent = "<?php
            echo $result["PrecioDiaTemporadaAlta"];?>€";

        infoHeaderDiv.appendChild(h4);
        infoHeaderDiv.appendChild(priceP);

        var infoFinalDiv = document.createElement("div");
        infoFinalDiv.setAttribute("class", "infofinal");

        var locationP = document.createElement("p");
        locationP.textContent = "<?php
            echo $result["DireccionPostal"];?>";

        var detailsP = document.createElement("p");
        detailsP.textContent = "Habitacions: <?php
            echo $result["NumeroHabitaciones"];?>";

        infoFinalDiv.appendChild(locationP);
        infoFinalDiv.appendChild(detailsP);

        button.appendChild(img);
        button.appendChild(infoDiv);
        infoDiv.appendChild(infoHeaderDiv);
        infoDiv.appendChild(infoFinalDiv);
        content.appendChild(button);

    </script>

        <!-- My calendar element -->
    <div id="my-calendar"></div>

    <!-- Outputs -->

    <!-- Create the calendar -->
    <script type="text/javascript">
        var text = document.createElement("p");
        text.textContent="Start";
        // Get the element
        var element = document.getElementById("my-calendar");
        // Create the calendar
        var myCalendar = jsCalendar.new(element);
        // Get the inputs

        // Add events
        myCalendar.onDateClick(function(event, date){
            var start = date;
            var text = document.getElementById("from");
            text.textContent="From";
            text = document.getElementById("start");
            text.textContent = start;
        });
    
    </script>



    <!-- Outputs -->
    <!-- Create the calendar -->
    <script type="text/javascript">
        // Get the element
        var text = document.createElement("p");
        text.textContent="End";
        var element = document.getElementById("my-calendar");
        // Create the calendar
        var myCalendar = jsCalendar.new(element);
        // Get the inputs

        // Add events
        myCalendar.onDateClick(function(event, date){
            var end = date;
            var text = document.getElementById("to");
            text.textContent = "To";
            text = document.getElementById("end");
            text.textContent = end;
            text = document.getElementById("submit");
            text.hidden = false;
        });
    
    </script>
</div>
    
<div id="showdate">
    <p id="from"></p>
    <p id="start"></p>
    <p id="to"></p>
    <p id="end"></p>
    <button type="submit" id = "submit" name="submit" hidden="true" class="btn btn-primary">Reserve</button>
</div>

  

</body>
</html>