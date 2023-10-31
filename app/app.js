document.addEventListener("DOMContentLoaded", function() {
    var prevScrollPos = window.pageYOffset;
    var header = document.querySelector("header");

    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollPos > currentScrollPos) {
            header.style.top = "0";
        } else {
            header.style.top = "-60px"; // Ajusta el valor según la altura de  encabezado
        }
        prevScrollPos = currentScrollPos;
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const startDateInput = document.getElementById('start');
    const endDateInput = document.getElementById('end');

});