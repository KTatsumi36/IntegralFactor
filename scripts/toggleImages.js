document.addEventListener("DOMContentLoaded", function () {
  const boton = document.getElementById("boton-toggle");
  const contenedor = document.getElementById("imagenes-captacion");

  boton.addEventListener("click", function () {
    if (contenedor.style.display === "none" || contenedor.style.display === "") {
      contenedor.style.display = "block";
    } else {
      contenedor.style.display = "none";
    }
  });
});
