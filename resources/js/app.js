import "./bootstrap";

// resources/js/app.js

require("datatables.net-bs4");

$(document).ready(function () {
    $("#miTabla").DataTable(); // Asigna DataTable a tu tabla.
});

// resources/js/app.js

import Swal from "sweetalert2";

$(document).ready(function () {
    $(".btn-danger").on("click", function (e) {
        e.preventDefault();
        const botonBorrar = $(this);

        Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Sí, borrarlo",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = botonBorrar.attr("href");
            }
        });
    });
});
