document.addEventListener("DOMContentLoaded", function() {
    var prevScrollPos = window.pageYOffset;
    var header = document.querySelector("header");

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            header.style.top = "0";
        } else {
            header.style.top = "-60px"; // Ajusta el valor según la altura de tu encabezado
        }
        prevScrollPos = currentScrollPos;
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const startDateInput = document.getElementById('start');
    const endDateInput = document.getElementById('end');

    // Escuchar cambios en las fechas
    startDateInput.addEventListener('change', () => {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        if (startDate > endDate) {
            endDateInput.value = startDateInput.value;
        }
    });

    endDateInput.addEventListener('change', () => {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        if (endDate < startDate) {
            startDateInput.value = endDateInput.value;
        }
    });
});