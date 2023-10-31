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


