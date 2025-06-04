<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contáctanos - Proyecto Captación de Agua</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>
    <!-- ===== MENÚ PLEGABLE (HAMBURGUESA) ===== -->
  <!-- Checkbox oculto que controla el estado del menú -->
  <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox" />

  <!-- Label que hace de botón en la esquina superior izquierda -->
  <label for="menu-toggle" class="menu-toggle-btn">≡</label>

  <!-- Navegación colapsable -->
  <nav class="collapsible-menu">
    <ul>
      <li><a href="html/1.php">Información</a></li>
      <li><a href="html/2.php">Importancia de la captación</a></li>
      <li><a href="CalculoArea/calculo_area_captacion.php">Calcular Área</a></li>
      <li><a href="html/contacto.html">Comentarios</a></li>
      <li><a href="Cuestionario/form1.php">Formulario</a></li>
      <li><a href="html/3.php">Materiales</a></li>
    </ul>
  </nav>
  <!-- ===== FIN MENÚ PLEGABLE ===== -->

  <nav class="menu-nav">
    <ul>
      <li><a href="../html/1.php">Información</a></li>
      <li><a href="../html/2.php">Importancia de <br> la captación</a></li>
      <li><a href="../CalculoArea/calculo_area_captacion.php">Calcular Área</a></li>
      <li><a href="../html/contacto.php">Comentarios</a></li>
      <li><a href="../Cuestionario/form1.php">Formulario</a></li>
      <li><a href="../html/3.php">Materiales</a></li>
    </ul>
  </nav>

  <header>Contáctanos</header>

  <div class="main-container">
    <div class="center-content">
      <div class="form-wrapper">
        <div class="form-container">
          <form method="POST" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="from_name" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="reply_to" required>

            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="message" rows="4" required></textarea>

            <button type="submit" class="send-btn">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="drops">
    <span>💧</span><span>💧</span><span>💧</span><span>💧</span><span>💧</span>
  </div>

  <footer>
    Sistema de captación de agua – Proyecto 2025
  </footer>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['from_name']);
    $correo = htmlspecialchars($_POST['reply_to']);
    $mensaje = htmlspecialchars($_POST['message']);
    $fecha = date("Y-m-d H:i:s");

    $contenido = "[$fecha] Nombre: $nombre | Correo: $correo\nMensaje: $mensaje\n--------------------------\n";

    $archivo = "../comentarios.txt";

    if (file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX)) {
        echo "<script>alert('✅ Comentario guardado correctamente.');</script>";
    } else {
        echo "<script>alert('❌ Error al guardar el comentario.');</script>";
    }
}
?>
</body>
</html>
