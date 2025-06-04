<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Cuestionario: Agua Pluvial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body class="body-cuestionario">
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
    <header>
        Bienvenid@ al<br> Cuidado del Agua Pluvial
    </header>

    <div class="main-container">
        <div class="center-content">
            <h2 class="titulo-cuestionario">Responde las siguientes preguntas</h2>
            <form class="cuestionario-form" action="resultados.php" method="post">
                <?php
                $preguntas = [
                    "¿Qué es el agua pluvial?",
                    "¿Cuál es una ventaja de recolectar agua de lluvia?",
                    "¿Dónde se puede almacenar el agua recolectada?",
                    "¿Qué materiales se necesitan para un sistema básico?",
                    "¿Qué se debe hacer antes de usar el agua recolectada?",
                    "¿Qué beneficios tiene en zonas urbanas?",
                    "¿Qué riesgo existe si no se filtra correctamente?",
                    "¿Cuál es un componente básico de un sistema de captación?"
                ];

                $respuestas = [
                    ["Agua del mar", "Agua de lluvia", "Agua tratada"],
                    ["Contaminación", "Ahorro de agua", "Incremento de consumo"],
                    ["Cisterna", "Charco", "Lago artificial"],
                    ["Tuberías, filtro, tanque", "Solo una cubeta", "Solo una manguera"],
                    ["Beberla directamente", "Hervirla o filtrarla", "Usarla sin revisar"],
                    ["Reducción de inundaciones", "Más humedad", "Ninguno"],
                    ["Agua limpia", "Contaminación", "Mejor calidad"],
                    ["Filtro de hojas", "Gasolina", "Panel solar"]
                ];

                for ($i = 0; $i < count($preguntas); $i++) {
                    echo "<p class='pregunta'>" . ($i + 1) . ". " . $preguntas[$i] . "</p>";
                    for ($j = 0; $j < 3; $j++) {
                        echo "<label class='opcion'><input type='radio' name='p$i' value='$j' required> " . $respuestas[$i][$j] . "</label><br>";
                    }
                    echo "<br>";
                }
                ?>
                <button type="submit">Enviar respuestas</button>
            </form>
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
