emailjs.init("9bU-CJpBm-YydW6Sm");

document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    emailjs.sendForm("service_fo5q18m", "template_1kqky8l", this)
    .then(function() {
        document.getElementById("success-message").style.display = "block";
        document.getElementById("contact-form").reset();
    }, function(error) {
        alert("Error al enviar el formulario: " + JSON.stringify(error));
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get("guardado") === "1") {
    alert("¡Tu comentario se guardó en chinga, we! ✅");
  }
});

emailjs.init("9bU-CJpBm-YydW6Sm");

document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    emailjs.sendForm("service_fo5q18m", "template_1kqky8l", this)
    .then(function() {
        document.getElementById("success-message").style.display = "block";
        document.getElementById("contact-form").reset();
    }, function(error) {
        alert("Error al enviar el formulario: " + JSON.stringify(error));
    });
});