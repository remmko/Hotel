<!DOCTYPE html>
<html lang="en">
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
    <div id="mainBody">
        
        <script>
            function addroom(){
    const formFields = [
        { label: "Title:", type: "text", name: "Titulo", required: true },
        { label: "Address:", type: "text", name: "DireccionPostal", required: true },
        { label: "Latitude:", type: "text", name: "Latitud", required: true },
        { label: "Longitude:", type: "text", name: "Longitud", required: true },
        { label: "Description:", type: "textarea", name: "Descripcion", required: true },
        { label: "Square Meters:", type: "number", name: "MetrosCuadrados", required: true },
        { label: "Number of Rooms:", type: "number", name: "NumeroHabitaciones", required: true },
        { label: "Low Season Price:", type: "number", name: "PrecioDiaTemporadaBaja", required: true },
        { label: "High Season Price:", type: "number", name: "PrecioDiaTemporadaAlta", required: true },
        { label: "Image:", type: "file", name: "img", required: true },
    ];

    // Получаем ссылку на элемент с классом "body"
    const bodyElement = document.getElementById("mainBody");
    bodyElement.innerHTML="";

    // Создаем div с классом "content"
    const contentDiv = document.createElement("div");
    contentDiv.className = "content";

    // Создаем заголовок h1
    const h1 = document.createElement("h1");
    h1.textContent = "Add Apartment";

    // Создаем форму
    const form = document.createElement("form");
    form.method = "POST";
    form.enctype = "multipart/form-data";

    // Создаем и добавляем поля формы поэлементно
    formFields.forEach(field => {
        const label = document.createElement("label");
        label.textContent = field.label;

        const input = document.createElement(field.type === "textarea" ? "textarea" : "input");
        input.type = field.type;
        input.name = field.name;
        if (field.required) {
            input.required = true;
        }

        // Связываем <label> с <input> посредством for и id
        const inputId = `input-${field.name}`;
        input.id = inputId;
        label.setAttribute("for", inputId);

        form.appendChild(label);
        form.appendChild(input);
    });

    // Создаем кнопку "Add"
    const submitButton = document.createElement("input");
    submitButton.type = "submit";
    submitButton.value = "Add";

    // Добавляем элементы в DOM
    contentDiv.appendChild(h1);
    contentDiv.appendChild(form);
    form.appendChild(submitButton);

    // Добавляем "contentDiv" в элемент с классом "body"
    bodyElement.appendChild(contentDiv);
}






    addroom()
        </script>
    </div>
</body>
</html>