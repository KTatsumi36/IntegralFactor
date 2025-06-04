<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Sistema de Captación de Agua Pluvial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body class="body-info-sistema">
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
        <h1>Sistema de Captación de Agua Pluvial</h1>
        <p class="subtitle">Conoce la importancia y beneficios de recolectar agua de lluvia</p>
    </header>
    
    <div class="container">
        <section class="info-section-sistema">
            <h2>Información Importante</h2>
            
            <div class="button-container-sistema">
                <button class="info-button-sistema" data-info="benefits">Beneficios Clave</button>
                <button class="info-button-sistema" data-info="components">Componentes del Sistema</button>
                <button class="info-button-sistema" data-info="maintenance">Mantenimiento</button>
                <button class="info-button-sistema" data-info="environment">Impacto Ambiental</button>
            </div>
            
            <div class="content-display-sistema" id="contentDisplay">
                <?php
                echo '<div class="info-content-sistema active" id="default-content">
                    <h3>Bienvenido al sistema de información</h3>
                    <p>Selecciona alguno de los botones anteriores para conocer información importante sobre los sistemas de captación de agua pluvial.</p>
                    <p>Este sistema te proporcionará datos valiosos sobre:</p>
                    <ul>
                        <li>Los beneficios de recolectar agua de lluvia</li>
                        <li>Los componentes necesarios para un sistema eficiente</li>
                        <li>Cómo mantener tu sistema en óptimas condiciones</li>
                        <li>El impacto positivo en el medio ambiente</li>
                    </ul>
                </div>';
                
                $infoContents = array(
                    'benefits' => '
                    <h3>Beneficios Clave de la Captación Pluvial</h3>
                    <p>La recolección de agua de lluvia ofrece múltiples ventajas:</p>
                    <ul>
                        <li><strong>Ahorro económico:</strong> Reduce hasta un 50% el consumo de agua potable</li>
                        <li><strong>Sostenibilidad:</strong> Disminuye la presión sobre fuentes tradicionales</li>
                        <li><strong>Autonomía:</strong> Provee agua en épocas de escasez</li>
                        <li><strong>Control de inundaciones:</strong> Reduce el escurrimiento superficial</li>
                        <li><strong>Versatilidad:</strong> El agua puede usarse para riego, limpieza y más</li>
                    </ul>
                    <div class="statistics">
                        <h4>Datos relevantes:</h4>
                        <p>Un techo de 100m² en una zona con 1000mm de lluvia anual puede captar aproximadamente 90,000 litros de agua al año.</p>
                    </div>',
                    
                    'components' => '
                    <h3>Componentes de un Sistema de Captación</h3>
                    <p>Un sistema completo consta de:</p>
                    <ol>
                        <li><strong>Superficie de captación:</strong> Generalmente el techo de la vivienda</li>
                        <li><strong>Sistema de conducción:</strong> Canaletas y bajantes que llevan el agua</li>
                        <li><strong>Filtros:</strong> Eliminan hojas, sedimentos y contaminantes</li>
                        <li><strong>Almacenamiento:</strong> Cisternas o tanques de almacenamiento</li>
                        <li><strong>Sistema de distribución:</strong> Bombas o gravedad para llevar el agua a su uso</li>
                        <li><strong>Tratamiento (opcional):</strong> Para potabilizar el agua si es necesario</li>
                    </ol>
                    <p class="tip"><strong>Tip:</strong> La calidad de cada componente afecta directamente la eficiencia del sistema.</p>',
                    
                    'maintenance' => '
                    <h3>Mantenimiento del Sistema</h3>
                    <p>Para garantizar el buen funcionamiento:</p>
                    <table>
                        <tr>
                            <th>Componente</th>
                            <th>Frecuencia</th>
                            <th>Acción</th>
                        </tr>
                        <tr>
                            <td>Canaletas</td>
                            <td>Trimestral</td>
                            <td>Limpiar de hojas y sedimentos</td>
                        </tr>
                        <tr>
                            <td>Filtros</td>
                            <td>Mensual en época de lluvias</td>
                            <td>Lavar o reemplazar</td>
                        </tr>
                        <tr>
                            <td>Tanque de almacenamiento</td>
                            <td>Anual</td>
                            <td>Limpieza y desinfección completa</td>
                        </tr>
                        <tr>
                            <td>Sistema de bombeo</td>
                            <td>Semestral</td>
                            <td>Revisión y mantenimiento</td>
                        </tr>
                    </table>
                    <div class="warning">
                        <h4>¡Importante!</h4>
                        <p>El mantenimiento preventivo es clave para evitar contaminación del agua almacenada.</p>
                    </div>',
                    
                    'environment' => '
                    <h3>Impacto Ambiental Positivo</h3>
                    <p>Los sistemas de captación pluvial contribuyen significativamente al medio ambiente:</p>
                    <div class="impact-grid">
                        <div class="impact-item">
                            <h4>Conservación de acuíferos</h4>
                            <p>Reduce la extracción de aguas subterráneas, permitiendo su recarga natural.</p>
                        </div>
                        <div class="impact-item">
                            <h4>Reducción de escorrentía</h4>
                            <p>Disminuye la carga de los sistemas de drenaje urbano y previene inundaciones.</p>
                        </div>
                        <div class="impact-item">
                            <h4>Menor energía consumida</h4>
                            <p>El tratamiento y distribución de agua potable requiere menos energía cuando hay menor demanda.</p>
                        </div>
                        <div class="impact-item">
                            <h4>Adaptación al cambio climático</h4>
                            <p>Provee resiliencia ante sequías y variaciones en los patrones de lluvia.</p>
                        </div>
                    </div>
                    <p class="conclusion">Cada sistema instalado contribuye a un futuro más sostenible.</p>'
                );
                
                foreach ($infoContents as $id => $content) {
                    echo '<div class="info-content-sistema" id="'.$id.'-content">'.$content.'</div>';
                }
                ?>
            </div>
        </section>
    </div>
    
    <footer>
        <p>Sistema de Información sobre Captación Pluvial &copy; <?php echo date('Y'); ?></p>
        <p>Contribuyendo a un futuro más sostenible</p>
    </footer>
    
    <script src="../scripts/info_sistema.js" defer></script>
</body>
</html>