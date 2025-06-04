<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Resultados del Cuestionario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body class="body-resultados">
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

=======
    <nav class="menu-nav">
        <ul>
            <li><a href="../html/1.php">Información</a></li>
            <li><a href="../html/2.php">Importancia de <br> la captación</a></li>
            <li><a href="../CalculoArea/calculo_area_captacion.php">Calcular Área</a></li>
            <li><a href="../html/contacto.html">Comentarios</a></li>
            <li><a href="../Cuestionario/form1.php">Formulario</a></li>
            <li><a href="../html/3.php">Materiales</a></li>
        </ul>
    </nav>

    <header>
        Bienvenid@ al<br> Cuidado del Agua Pluvial
    </header>

    <div class="main-container">
        <div class="center-content">
            <h2 class="titulo-resultados">Resultados del Cuestionario</h2>
            <div class="contenedor-resultado">
                <?php
                $correctas = [1, 1, 0, 0, 1, 0, 1, 0];
                $puntos = 0;
                $recomendaciones = [];

                for ($i = 0; $i < count($correctas); $i++) {
                    $respuesta = isset($_POST["p$i"]) ? $_POST["p$i"] : -1;
                    if ($respuesta == $correctas[$i]) {
                        $puntos++;
                    } else {
                        $recomendaciones[] = "Mejorar el conocimiento sobre la pregunta " . ($i + 1) . ".";
                        switch ($i) {
                            case 0:
                                $recomendaciones[] = "Revisar qué es el agua pluvial.";
                                break;
                            case 1:
                                $recomendaciones[] = "Entender las ventajas de recolectar agua de lluvia.";
                                break;
                            case 2:
                                $recomendaciones[] = "Conocer los lugares adecuados para almacenar agua pluvial.";
                                break;
                            case 3:
                                $recomendaciones[] = "Identificar los materiales necesarios para un sistema básico.";
                                break;
                            case 4:
                                $recomendaciones[] = "Saber cómo preparar el agua recolectada antes de su uso.";
                                break;
                            case 5:
                                $recomendaciones[] = "Comprender los beneficios en zonas urbanas.";
                                break;
                            case 6:
                                $recomendaciones[] = "Conocer los riesgos de no filtrar correctamente el agua.";
                                break;
                            case 7:
                                $recomendaciones[] = "Identificar componentes básicos de un sistema de captación.";
                                break;
                        }
                    }
                }

                echo "<p>Obtuviste <strong>$puntos/8</strong> respuestas correctas.</p>";

                if ($puntos == 8) {
                    echo "<p>¡Excelente! Has comprendido muy bien el tema de la captación de agua pluvial.</p>";
                } else {
                    echo "<h3>Recomendaciones:</h3><ul class='lista-recomendaciones'>";
                    foreach ($recomendaciones as $rec) {
                        echo "<li>$rec</li>";
                        echo "<li>Revisar el material de estudio sobre el tema.</li>";
                    }
                    echo "</ul>";
                }
                ?>
            </div>
        </div>
    </div>

    <div class="drops">
        <span>💧</span><span>💧</span><span>💧</span><span>💧</span><span>💧</span>
    </div>

    <footer>
        Sistema de captación de agua - Proyecto 2025
    </footer>
</body>
</html>
