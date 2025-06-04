<?php
// -------------------------------------------
// 1. CÁLCULO Y VALIDACIÓN (PHP)
// -------------------------------------------
function calcular_area_captacion($volumen, $precipitacion, $eficiencia = 0.85, $tipo = 'litros_mm') {
    if ($tipo === 'litros_mm') {
        // Convertir litros a m³ y mm a m
        $volumen_m3 = $volumen / 1000.0;           // [m³]
        $precipitacion_m = $precipitacion / 1000.0; // [m]
        $volumen = $volumen_m3;
        $precipitacion = $precipitacion_m;
    }
    if ($precipitacion * $eficiencia == 0) {
        return 0;
    }
    // Área en m²
    $area = $volumen / ($precipitacion * $eficiencia);
    return $area;
}

// Inicializar variables
$error = "";
$area = null;
$volumen    = "";
$precipitacion = "";
$eficiencia = "";
$techo      = "";
$margen_seguridad = false;
$filtro_extra     = false;

// Procesar POST al enviar el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recopilar y sanitizar entradas
    $volumen = isset($_POST["volumen"]) ? trim($_POST["volumen"]) : "";
    $precipitacion = isset($_POST["precipitacion"]) ? trim($_POST["precipitacion"]) : "";
    $eficiencia = isset($_POST["eficiencia"]) && $_POST["eficiencia"] !== "" 
                  ? trim($_POST["eficiencia"]) 
                  : "0.85";
    $techo = isset($_POST["techo"]) ? $_POST["techo"] : "";
    $margen_seguridad = isset($_POST["margen_seguridad"]);
    $filtro_extra     = isset($_POST["filtro_extra"]);

    // Validaciones
    if (!is_numeric($volumen) || floatval($volumen) <= 0) {
        $error = "Por favor, introduce un volumen válido mayor a 0.";
    } elseif (!is_numeric($precipitacion) || floatval($precipitacion) <= 0) {
        $error = "Por favor, introduce una precipitación válida mayor a 0.";
    } elseif (!is_numeric($eficiencia) || floatval($eficiencia) <= 0 || floatval($eficiencia) > 1) {
        $error = "La eficiencia debe ser un número entre 0.01 y 1.";
    } elseif (empty($techo)) {
        $error = "Por favor, selecciona el tipo de techo.";
    } else {
        // Calcular área (en m²)
        $area = calcular_area_captacion(
            floatval($volumen),
            floatval($precipitacion),
            floatval($eficiencia),
            'litros_mm'
        );
        // Si piden margen de seguridad, aumentar 10%
        if ($margen_seguridad) {
            $area *= 1.10;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Calcular Área de Captación</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 1) LINK A TU CSS PRINCIPAL -->
    <link rel="stylesheet" href="../css/style.css" />

    <!-- 2) LINK AL JS EXTERNO (con defer para que cargue después del DOM) -->
    <script src="../scripts/calculo_area.js" defer></script>
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
         NAVBAR (idéntica a tu index.html)
         ================================ -->
    <nav class="menu-nav">
      <ul>
        <li><a href="../html/1.php">Información</a></li>
        <li><a href="../html/2.php">Importancia de <br> la captación</a></li>
        <li><a href="calculo_area_captacion.php">Calcular Área</a></li>
        <li><a href="../html/contacto.php">Comentarios</a></li>
        <li><a href="../html/contacto.html">Comentarios</a></li>

        <li><a href="../Cuestionario/form1.php">Formulario</a></li>
        <li><a href="../html/3.php">Materiales</a></li>
      </ul>
    </nav>

    <!-- ================================
         HEADER PRINCIPAL
         ================================ -->
    <header>
      Cálculo de Área de Captación de Agua de Lluvia
    </header>

    <!-- ================================
         CONTENEDOR PRINCIPAL
         ================================ -->
    <div class="main-container">
        <!-- ================================
             FORMULARIO ESTRUCTURADO
             ================================ -->
        <div class="form-container">
            <h2>🌧️ Ingresa tus datos</h2>
            <form id="formCaptacion" method="post" autocomplete="off" novalidate>
                <!-- Volumen (litros) -->
                <div class="input-group">
                    <label for="volumen">Volumen deseado (litros):</label>
                    <input
                        type="number"
                        name="volumen"
                        id="volumen"
                        min="1"
                        step="any"
                        required
                        value="<?= htmlspecialchars($volumen, ENT_QUOTES) ?>"
                    />
                    <small class="input-error" id="error-volumen"></small>
                </div>

                <!-- Precipitación (mm) -->
                <div class="input-group">
                    <label for="precipitacion">Precipitación media anual (mm):</label>
                    <input
                        type="number"
                        name="precipitacion"
                        id="precipitacion"
                        min="1"
                        step="any"
                        required
                        value="<?= htmlspecialchars($precipitacion, ENT_QUOTES) ?>"
                    />
                    <small class="input-error" id="error-precipitacion"></small>
                </div>

                <!-- Eficiencia -->
                <div class="input-group">
                    <label for="eficiencia">Eficiencia del sistema (0.01 - 1):</label>
                    <input
                        type="number"
                        name="eficiencia"
                        id="eficiencia"
                        min="0.01"
                        max="1"
                        step="0.01"
                        placeholder="0.85"
                        value="<?= htmlspecialchars($eficiencia, ENT_QUOTES) ?>"
                    />
                    <div class="info">
                        Opcional: Usualmente entre 0.75 y 0.90. Por defecto es 0.85
                    </div>
                    <small class="input-error" id="error-eficiencia"></small>
                </div>

                <!-- Tipo de techo (radio) -->
                <div class="radio-group">
                    <label>Tipo de techo:</label><br />
                    <label>
                        <input
                            type="radio"
                            name="techo"
                            value="lamina"
                            <?= ($techo === 'lamina') ? 'checked' : '' ?>
                        />Lámina
                    </label>
                    <label>
                        <input
                            type="radio"
                            name="techo"
                            value="teja"
                            <?= ($techo === 'teja') ? 'checked' : '' ?>
                        />Teja
                    </label>
                    <label>
                        <input
                            type="radio"
                            name="techo"
                            value="concreto"
                            <?= ($techo === 'concreto') ? 'checked' : '' ?>
                        />Concreto
                    </label>
                    <small class="input-error" id="error-techo"></small>
                </div>

                <!-- Checkboxes -->
                <div class="checkbox-group">
                    <label>
                        <input
                            type="checkbox"
                            name="margen_seguridad"
                            id="margen_seguridad"
                            value="1"
                            <?= $margen_seguridad ? 'checked' : '' ?>
                        /> Incluir margen de seguridad (10%)
                    </label>
                    <label>
                        <input
                            type="checkbox"
                            name="filtro_extra"
                            id="filtro_extra"
                            value="1"
                            <?= $filtro_extra ? 'checked' : '' ?>
                        /> Incluir filtrado extra
                    </label>
                </div>

                <!-- Botones -->
                <button type="submit" id="btnCalcular">Calcular Área</button>
                <a href="../index.HTML" class="volver-btn">Volver al inicio</a>
            </form>

            <!-- Mensajes de error (servidor) -->
            <?php if ($error): ?>
                <div class="error mensaje-servidor"><?= htmlspecialchars($error, ENT_QUOTES) ?></div>
            <?php endif; ?>

            <!-- Resultado (servidor) -->
            <?php if ($area !== null && !$error): ?>
                <div class="resultado">
                    <strong>Área de captación necesaria:</strong><br />
                    <?= number_format($area, 2) ?> m²<br />
                    <small>
                        Tipo de techo: <?= htmlspecialchars(ucfirst($techo), ENT_QUOTES) ?><br />
                        <?= $margen_seguridad ? "Incluye margen de seguridad (10%)<br>" : "" ?>
                        <?= $filtro_extra ? "Incluye filtrado extra<br>" : "" ?>
                    </small>
                </div>
            <?php endif; ?>

            <!-- Explicación adicional -->
            <div class="info" style="margin-top: 2em;">
                <strong>¿Cómo se calcula?</strong><br />
                Área = Volumen (litros) ÷ (Precipitación anual (mm) × Eficiencia)<br />
                Todos los datos se convierten a sus unidades estándar antes del cálculo.<br />
                Si seleccionas "margen de seguridad", el área se incrementa un 10%.
            </div>
        </div>
    </div>

    <!-- ================================
         ICONOS DECORATIVOS / “drops”
         ================================ -->
    <div class="drops">
      <span>💧</span><span>💧</span><span>💧</span><span>💧</span><span>💧</span>
    </div>

    <!-- ================================
         FOOTER
         ================================ -->
    <footer>
      Sistema de captación de agua - Proyecto 2025
    </footer>
</body>
</html>
