document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formCaptacion");
    const volumenInput = document.getElementById("volumen");
    const precipInput = document.getElementById("precipitacion");
    const eficInput = document.getElementById("eficiencia");
    const techoRadios = document.getElementsByName("techo");

    // Pequeñas referencias a los <small> donde mostraremos errores
    const errorVol = document.getElementById("error-volumen");
    const errorPre = document.getElementById("error-precipitacion");
    const errorEfi = document.getElementById("error-eficiencia");
    const errorTec = document.getElementById("error-techo");

    form.addEventListener("submit", function(event) {
        // Limpiar mensajes previos
        clearErrors();

        let hayError = false;

        // 1) Validar Volumen
        const volumenVal = parseFloat(volumenInput.value);
        if (isNaN(volumenVal) || volumenVal <= 0) {
            errorVol.textContent = "Introduce un volumen válido (> 0).";
            errorVol.style.display = "block";
            hayError = true;
        }

        // 2) Validar Precipitación
        const precipVal = parseFloat(precipInput.value);
        if (isNaN(precipVal) || precipVal <= 0) {
            errorPre.textContent = "Introduce una precipitación válida (> 0).";
            errorPre.style.display = "block";
            hayError = true;
        }

        // 3) Validar Eficiencia (opcional, pero si se ingresa debe ser 0.01 ≤ x ≤ 1)
        const eficVal = parseFloat(eficInput.value);
        if (eficInput.value !== "") {
            if (isNaN(eficVal) || eficVal < 0.01 || eficVal > 1) {
                errorEfi.textContent = "Eficiencia entre 0.01 y 1.";
                errorEfi.style.display = "block";
                hayError = true;
            }
        }

        // 4) Validar selección de techo
        let techoSeleccionado = false;
        for (const radio of techoRadios) {
            if (radio.checked) {
                techoSeleccionado = true;
                break;
            }
        }
        if (!techoSeleccionado) {
            errorTec.textContent = "Selecciona el tipo de techo.";
            errorTec.style.display = "block";
            hayError = true;
        }

        // Si hay error en cliente, prevenir envío y detener acción
        if (hayError) {
            event.preventDefault();
        }
    });

    function clearErrors() {
        errorVol.style.display = "none";
        errorVol.textContent = "";
        errorPre.style.display = "none";
        errorPre.textContent = "";
        errorEfi.style.display = "none";
        errorEfi.textContent = "";
        errorTec.style.display = "none";
        errorTec.textContent = "";
    }
});

// ---------------------------------------------
// js/calculo_area.js
// ---------------------------------------------
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formCaptacion");
    const volumenInput = document.getElementById("volumen");
    const precipInput = document.getElementById("precipitacion");
    const eficInput = document.getElementById("eficiencia");
    const techoRadios = document.getElementsByName("techo");

    // Pequeñas referencias a los <small> donde mostraremos errores
    const errorVol = document.getElementById("error-volumen");
    const errorPre = document.getElementById("error-precipitacion");
    const errorEfi = document.getElementById("error-eficiencia");
    const errorTec = document.getElementById("error-techo");

    form.addEventListener("submit", function(event) {
        // Limpiar mensajes previos
        clearErrors();

        let hayError = false;

        // 1) Validar Volumen
        const volumenVal = parseFloat(volumenInput.value);
        if (isNaN(volumenVal) || volumenVal <= 0) {
            errorVol.textContent = "Introduce un volumen válido (> 0).";
            errorVol.style.display = "block";
            hayError = true;
        }

        // 2) Validar Precipitación
        const precipVal = parseFloat(precipInput.value);
        if (isNaN(precipVal) || precipVal <= 0) {
            errorPre.textContent = "Introduce una precipitación válida (> 0).";
            errorPre.style.display = "block";
            hayError = true;
        }

        // 3) Validar Eficiencia (opcional, pero si se ingresa debe ser 0.01 ≤ x ≤ 1)
        const eficVal = parseFloat(eficInput.value);
        if (eficInput.value !== "") {
            if (isNaN(eficVal) || eficVal < 0.01 || eficVal > 1) {
                errorEfi.textContent = "Eficiencia entre 0.01 y 1.";
                errorEfi.style.display = "block";
                hayError = true;
            }
        }

        // 4) Validar selección de techo
        let techoSeleccionado = false;
        for (const radio of techoRadios) {
            if (radio.checked) {
                techoSeleccionado = true;
                break;
            }
        }
        if (!techoSeleccionado) {
            errorTec.textContent = "Selecciona el tipo de techo.";
            errorTec.style.display = "block";
            hayError = true;
        }

        // Si hay error en cliente, prevenir envío y detener acción
        if (hayError) {
            event.preventDefault();
        }
    });

    function clearErrors() {
        errorVol.style.display = "none";
        errorVol.textContent = "";
        errorPre.style.display = "none";
        errorPre.textContent = "";
        errorEfi.style.display = "none";
        errorEfi.textContent = "";
        errorTec.style.display = "none";
        errorTec.textContent = "";
    }
});
