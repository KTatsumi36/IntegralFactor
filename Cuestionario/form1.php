<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Capacitación sobre Agua Pluvial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 1) Enlace a tu CSS global -->
    <link rel="stylesheet" href="../css/style.css" />
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
    <!-- ================================
         NAVBAR (idéntica a tu index.HTML)
         ================================ -->
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

    <!-- ================================
         HEADER PRINCIPAL (igual al index)
         ================================ -->
    <header>
        Bienvenid@ al<br> Cuidado del Agua Pluvial
    </header>

    <!-- ================================
         CONTENEDOR PRINCIPAL
         ================================ -->
    <div class="main-container">
        <div class="center-content">
            <!-- Título de esta sección -->
            <h2 class="titulo-capacitacion">
                Capacitación: Importancia del Agua Pluvial
            </h2>

            <!-- Párrafo explicativo -->
            <p class="texto-capacitacion">
                Aprende cómo recolectar y utilizar el agua de lluvia de forma eficiente para contribuir al cuidado del medio ambiente.
            </p>

            <!-- Botón que lleva al siguiente formulario/página -->
            <form action="form2.php" method="post">
                <button type="submit">Iniciar</button>
            </form>
        </div>
    </div>

    <!-- ================================
         ICONOS “drops” (igual que en index)
         ================================ -->
    <div class="drops">
        <span>💧</span><span>💧</span><span>💧</span><span>💧</span><span>💧</span>
    </div>

    <!-- ================================
         FOOTER (igual que en index)
         ================================ -->
    <footer>
        Sistema de captación de agua - Proyecto 2025
    </footer>
</body>
</html>
