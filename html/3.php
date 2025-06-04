<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Materiales para Captación de Agua Pluvial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Enlazamos el CSS que viene abajo -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Font Awesome (para los íconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body class="body-materiales">

    <!-- ===== MENÚ HAMBURGUESA (PLEGABLE) ===== -->
    <!-- 1) Checkbox oculto -->
    <input type="checkbox" id="menu-toggle" class="menu-toggle-checkbox" />

    <!-- 2) Botón “≡” en la esquina superior izquierda -->
    <label for="menu-toggle" class="menu-toggle-btn">≡</label>

    <!-- 3) Menú colapsable (desplazable) -->
    <nav class="collapsible-menu">
      <ul>
        <li><a href="1.php">Información</a></li>
        <li><a href="2.php">Importancia de la captación</a></li>
        <li><a href="../CalculoArea/calculo_area_captacion.php">Calcular Área</a></li>
        <li><a href="../html/contacto.php">Comentarios</a></li>
        <li><a href="../Cuestionario/form1.php">Formulario</a></li>
        <li><a href="3.php">Materiales</a></li>
      </ul>
    </nav>
    <!-- ===== FIN MENÚ HAMBURGUESA ===== -->


    <!-- ===== BARRA DE NAVEGACIÓN (NAVBAR) FIJA ===== -->
    <nav class="menu-nav">
      <ul>
        <li><a href="1.php">Información</a></li>
        <li><a href="2.php">Importancia de <br> la captación</a></li>
        <li><a href="../CalculoArea/calculo_area_captacion.php">Calcular Área</a></li>
        <li><a href="../html/contacto.php">Comentarios</a></li>
        <li><a href="../Cuestionario/form1.php">Formulario</a></li>
        <li><a href="3.php">Materiales</a></li>
      </ul>
    </nav>
    <!-- ===== FIN NAVBAR ===== -->


    <!-- Espacio extra para que el contenido no quede “bajo” la navbar fija -->
    <div class="app-offset"></div>

    <!-- ===== ENCABEZADO PRINCIPAL ===== -->
    <header class="header-materiales">
      <h1><i class="fas fa-tint"></i> Materiales para Captación de Agua Pluvial</h1>
      <p class="subtitle">Selecciona los componentes para conocer los materiales recomendados y sus características</p>
    </header>

    <!-- ===== CONTENIDO PRINCIPAL ===== -->
    <div class="container-materiales">
      <section class="materials-section">
        <h2><i class="fas fa-clipboard-list"></i> Componentes del Sistema</h2>

        <div class="button-container-materiales">
          <button class="material-button" data-material="superficie"><i class="fas fa-home"></i> Superficie de Captación</button>
          <button class="material-button" data-material="canaletas"><i class="fas fa-tint"></i> Canaletas</button>
          <button class="material-button" data-material="filtros"><i class="fas fa-filter"></i> Filtros</button>
          <button class="material-button" data-material="almacenamiento"><i class="fas fa-water"></i> Almacenamiento</button>
          <button class="material-button" data-material="distribucion"><i class="fas fa-project-diagram"></i> Distribución</button>
        </div>

        <div class="content-display-materiales" id="contentDisplay">
          <?php
          // Contenido por defecto
          echo '<div class="material-content active" id="default-content">
            <div class="material-card">
              <h3><i class="fas fa-info-circle"></i> Información sobre materiales</h3>
              <p>Selecciona alguno de los componentes del sistema para conocer los materiales recomendados, sus ventajas y desventajas.</p>
              <p>Esta guía te ayudará a:</p>
              <ul>
                <li>Elegir los materiales más adecuados para tu sistema</li>
                <li>Conocer las ventajas y limitaciones de cada opción</li>
                <li>Tomar decisiones informadas sobre durabilidad y costo</li>
                <li>Seleccionar materiales seguros para el almacenamiento de agua</li>
              </ul>
            </div>
          </div>';

          // Los contenidos individuales para cada botón
          $materialContents = array(
            'superficie' => '
              <div class="material-card">
                <h3><i class="fas fa-home"></i> Superficie de Captación</h3>
                <p>Materiales recomendados para techos y superficies de recolección:</p>
                <h4>Techumbres:</h4>
                <table class="comparison-table">
                  <tr>
                    <th>Material</th>
                    <th>Durabilidad</th>
                    <th>Costo</th>
                    <th>Eficiencia</th>
                  </tr>
                  <tr>
                    <td>Teja de arcilla</td>
                    <td>Alta (50+ años)</td>
                    <td>Moderado</td>
                    <td>Excelente</td>
                  </tr>
                  <tr>
                    <td>Lámina galvanizada</td>
                    <td>Media (20-30 años)</td>
                    <td>Bajo</td>
                    <td>Buena</td>
                  </tr>
                  <tr>
                    <td>Lámina de acero inoxidable</td>
                    <td>Muy alta (50+ años)</td>
                    <td>Alto</td>
                    <td>Excelente</td>
                  </tr>
                  <tr>
                    <td>Concreto</td>
                    <td>Alta (30-50 años)</td>
                    <td>Moderado</td>
                    <td>Buena</td>
                  </tr>
                </table>
                <div class="material-pros-cons">
                  <div class="pros">
                    <h4><i class="fas fa-check-circle"></i> Recomendaciones</h4>
                    <ul>
                      <li>Prefiere materiales inertes que no alteren el pH del agua</li>
                      <li>Superficies lisas facilitan la conducción del agua</li>
                      <li>Colores claros reducen la temperatura del agua</li>
                    </ul>
                  </div>
                  <div class="cons">
                    <h4><i class="fas fa-exclamation-triangle"></i> Precauciones</h4>
                    <ul>
                      <li>Evitar superficies de asfalto o materiales con químicos</li>
                      <li>Superficies porosas pueden albergar bacterias</li>
                      <li>Materiales metálicos pueden corroerse con el tiempo</li>
                    </ul>
                  </div>
                </div>
              </div>',

            'canaletas' => '
              <div class="material-card">
                <h3><i class="fas fa-tint"></i> Canaletas y Bajantes</h3>
                <p>Materiales para el sistema de conducción del agua:</p>
                <h4>Opciones disponibles:</h4>
                <table class="comparison-table">
                  <tr>
                    <th>Material</th>
                    <th>Ventajas</th>
                    <th>Desventajas</th>
                    <th>Vida útil</th>
                  </tr>
                  <tr>
                    <td>PVC</td>
                    <td>Liviano, fácil instalación, bajo costo</td>
                    <td>Puede deformarse con calor extremo</td>
                    <td>20-30 años</td>
                  </tr>
                  <tr>
                    <td>Aluminio</td>
                    <td>Resistente, ligero, no se oxida</td>
                    <td>Costo moderado, puede abollarse</td>
                    <td>30-50 años</td>
                  </tr>
                  <tr>
                    <td>Acero inoxidable</td>
                    <td>Muy duradero, aspecto premium</td>
                    <td>Costo elevado, instalación especializada</td>
                    <td>50+ años</td>
                  </tr>
                  <tr>
                    <td>Cobre</td>
                    <td>Antibacteriano, duradero, estético</td>
                    <td>Costo muy alto, requiere mantenimiento</td>
                    <td>50+ años</td>
                  </tr>
                </table>
                <div class="material-pros-cons">
                  <div class="pros">
                    <h4><i class="fas fa-check-circle"></i> Instalación adecuada</h4>
                    <ul>
                      <li>Inclinar ligeramente (1-2%) para buen flujo</li>
                      <li>Instalar protectores contra hojas</li>
                      <li>Usar soportes cada 60-80 cm</li>
                    </ul>
                  </div>
                  <div class="cons">
                    <h4><i class="fas fa-exclamation-triangle"></i> Problemas comunes</h4>
                    <ul>
                      <li>Acumulación de sedimentos en curvas</li>
                      <li>Fugas en uniones mal selladas</li>
                      <li>Congelamiento en climas fríos</li>
                    </ul>
                  </div>
                </div>
              </div>',

            'filtros' => '
              <div class="material-card">
                <h3><i class="fas fa-filter"></i> Sistemas de Filtrado</h3>
                <p>Materiales y tecnologías para filtrar el agua pluvial:</p>
                <h4>Tipos de filtros:</h4>
                <table class="comparison-table">
                  <tr>
                    <th>Tipo</th>
                    <th>Materiales</th>
                    <th>Eficiencia</th>
                    <th>Mantenimiento</th>
                  </tr>
                  <tr>
                    <td>Filtro de malla</td>
                    <td>Acero inoxidable, nylon</td>
                    <td>Partículas &gt; 1mm</td>
                    <td>Limpieza mensual</td>
                  </tr>
                  <tr>
                    <td>Filtro de arena</td>
                    <td>Arena sílica, grava, carbón</td>
                    <td>Partículas &gt; 0.1mm</td>
                    <td>Lavado cada 3-6 meses</td>
                  </tr>
                  <tr>
                    <td>Filtro de cartucho</td>
                    <td>Celulosa, polipropileno</td>
                    <td>Partículas &gt; 5 micras</td>
                    <td>Reemplazo cada 6-12 meses</td>
                  </tr>
                  <tr>
                    <td>Filtro UV</td>
                    <td>Lámpara UV, cuarzo</td>
                    <td>Bacterias y virus</td>
                    <td>Cambio lámpara anual</td>
                  </tr>
                </table>
                <div class="material-pros-cons">
                  <div class="pros">
                    <h4><i class="fas fa-check-circle"></i> Buenas prácticas</h4>
                    <ul>
                      <li>Instalar filtro grueso antes del almacenamiento</li>
                      <li>Usar filtro fino si el agua será para consumo</li>
                      <li>Incluir sistema de bypass para mantenimiento</li>
                    </ul>
                  </div>
                  <div class="cons">
                    <h4><i class="fas fa-exclamation-triangle"></i> Riesgos</h4>
                    <ul>
                      <li>Filtros obstruidos reducen captación</li>
                      <li>Materiales no adecuados pueden contaminar</li>
                      <li>Filtros mal mantenidos pierden efectividad</li>
                    </ul>
                  </div>
                </div>
              </div>',

            'almacenamiento' => '
              <div class="material-card">
                <h3><i class="fas fa-water"></i> Tanques de Almacenamiento</h3>
                <p>Materiales para cisternas y depósitos de agua:</p>
                <h4>Comparativa de materiales:</h4>
                <table class="comparison-table">
                  <tr>
                    <th>Material</th>
                    <th>Capacidad</th>
                    <th>Costo</th>
                    <th>Recomendaciones</th>
                  </tr>
                  <tr>
                    <td>Polietileno (plástico)</td>
                    <td>Hasta 20,000L</td>
                    <td>Bajo a moderado</td>
                    <td>Opaco para evitar algas</td>
                  </tr>
                  <tr>
                    <td>Fibra de vidrio</td>
                    <td>Hasta 50,000L</td>
                    <td>Moderado a alto</td>
                    <td>Excelente para enterrar</td>
                  </tr>
                  <tr>
                    <td>Concreto</td>
                    <td>Ilimitado</td>
                    <td>Alto (construcción)</td>
                    <td>Requiere impermeabilización</td>
                  </tr>
                  <tr>
                    <td>Acero inoxidable</td>
                    <td>Hasta 100,000L</td>
                    <td>Muy alto</td>
                    <td>Para uso comercial</td>
                  </tr>
                </table>
                <div class="material-pros-cons">
                  <div class="pros">
                    <h4><i class="fas fa-check-circle"></i> Características ideales</h4>
                    <ul>
                      <li>Opaco para evitar crecimiento de algas</li>
                      <li>Tapa hermética contra insectos</li>
                      <li>Válvula de desagüe para limpieza</li>
                      <li>Resistente a UV si está expuesto</li>
                    </ul>
                  </div>
                  <div class="cons">
                    <h4><i class="fas fa-exclamation-triangle"></i> Problemas comunes</h4>
                    <ul>
                      <li>Materiales transparentes permiten algas</li>
                      <li>Tanques no certificados pueden liberar químicos</li>
                      <li>Estructuras débiles pueden colapsar</li>
                    </ul>
                  </div>
                </div>
              </div>',

            'distribucion' => '
              <div class="material-card">
                <h3><i class="fas fa-project-diagram"></i> Sistema de Distribución</h3>
                <p>Materiales para llevar el agua a su punto de uso:</p>
                <h4>Tuberías y accesorios:</h4>
                <table class="comparison-table">
                  <tr>
                    <th>Material</th>
                    <th>Presión Máx.</th>
                    <th>Instalación</th>
                    <th>Compatibilidad</th>
                  </tr>
                  <tr>
                    <td>PVC</td>
                    <td>10 bar</td>
                    <td>Fácil (pegamento)</td>
                    <td>Agua fría sólo</td>
                  </tr>
                  <tr>
                    <td>CPVC</td>
                    <td>15 bar</td>
                    <td>Fácil (pegamento)</td>
                    <td>Agua caliente y fría</td>
                  </tr>
                  <tr>
                    <td>Polietileno</td>
                    <td>8 bar</td>
                    <td>Termofusión o accesorios</td>
                    <td>Exterior/enterrar</td>
                  </tr>
                  <tr>
                    <td>Acero inoxidable</td>
                    <td>30+ bar</td>
                    <td>Soldadura/conexiones</td>
                    <td>Todo uso</td>
                  </tr>
                </table>
                <div class="material-pros-cons">
                  <div class="pros">
                    <h4><i class="fas fa-check-circle"></i> Recomendaciones</h4>
                    <ul>
                      <li>Usar tuberías de color diferente a agua potable</li>
                      <li>Incluir válvulas de purga en puntos bajos</li>
                      <li>Prever acceso para mantenimiento</li>
                      <li>Aislar tuberías en zonas de congelamiento</li>
                    </ul>
                  </div>
                  <div class="cons">
                    <h4><i class="fas fa-exclamation-triangle"></i> Consideraciones</h4>
                    <ul>
                      <li>Algunos plásticos se degradan con UV</li>
                      <li>Metales pueden corroerse con el tiempo</li>
                      <li>Diámetro inadecuado afecta presión</li>
                    </ul>
                  </div>
                </div>
              </div>'
          );

          foreach ($materialContents as $id => $content) {
            echo '<div class="material-content" id="'.$id.'-content">'.$content.'</div>';
          }
          ?>
        </div>
      </section>
    </div>

    <footer class="footer-materiales">
      <p>Sistema de Información sobre Materiales para Captación Pluvial &copy; <?php echo date('Y'); ?></p>
      <p>Desarrollado para promover sistemas de captación sostenibles y eficientes</p>
    </footer>

    <!-- Script para alternar el contenido de materiales -->
    <script src="../scripts/materiales.js" defer></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Materiales para Captación de Agua Pluvial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body class="body-materiales">
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

    <header class="header-materiales">
        <h1><i class="fas fa-tint"></i> Materiales para Captación de Agua Pluvial</h1>
        <p class="subtitle">Selecciona los componentes para conocer los materiales recomendados y sus características</p>
    </header>

    <div class="container-materiales">
        <section class="materials-section">
            <h2><i class="fas fa-clipboard-list"></i> Componentes del Sistema</h2>

            <div class="button-container-materiales">
                <button class="material-button" data-material="superficie"><i class="fas fa-home"></i> Superficie de Captación</button>
                <button class="material-button" data-material="canaletas"><i class="fas fa-tint"></i> Canaletas</button>
                <button class="material-button" data-material="filtros"><i class="fas fa-filter"></i> Filtros</button>
                <button class="material-button" data-material="almacenamiento"><i class="fas fa-water"></i> Almacenamiento</button>
                <button class="material-button" data-material="distribucion"><i class="fas fa-project-diagram"></i> Distribución</button>
            </div>

            <div class="content-display-materiales" id="contentDisplay">
                <?php
                echo '<div class="material-content active" id="default-content">
                    <div class="material-card">
                        <h3><i class="fas fa-info-circle"></i> Información sobre materiales</h3>
                        <p>Selecciona alguno de los componentes del sistema para conocer los materiales recomendados, sus ventajas y desventajas.</p>
                        <p>Esta guía te ayudará a:</p>
                        <ul>
                            <li>Elegir los materiales más adecuados para tu sistema</li>
                            <li>Conocer las ventajas y limitaciones de cada opción</li>
                            <li>Tomar decisiones informadas sobre durabilidad y costo</li>
                            <li>Seleccionar materiales seguros para el almacenamiento de agua</li>
                        </ul>
                    </div>
                </div>';

                $materialContents = array(
                    'superficie' => '
                    <div class="material-card">
                        <h3><i class="fas fa-home"></i> Superficie de Captación</h3>
                        <p>Materiales recomendados para techos y superficies de recolección:</p>

                        <h4>Techumbres:</h4>
                        <table class="comparison-table">
                            <tr>
                                <th>Material</th>
                                <th>Durabilidad</th>
                                <th>Costo</th>
                                <th>Eficiencia</th>
                            </tr>
                            <tr>
                                <td>Teja de arcilla</td>
                                <td>Alta (50+ años)</td>
                                <td>Moderado</td>
                                <td>Excelente</td>
                            </tr>
                            <tr>
                                <td>Lámina galvanizada</td>
                                <td>Media (20-30 años)</td>
                                <td>Bajo</td>
                                <td>Buena</td>
                            </tr>
                            <tr>
                                <td>Lámina de acero inoxidable</td>
                                <td>Muy alta (50+ años)</td>
                                <td>Alto</td>
                                <td>Excelente</td>
                            </tr>
                            <tr>
                                <td>Concreto</td>
                                <td>Alta (30-50 años)</td>
                                <td>Moderado</td>
                                <td>Buena</td>
                            </tr>
                        </table>

                        <div class="material-pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-check-circle"></i> Recomendaciones</h4>
                                <ul>
                                    <li>Prefiere materiales inertes que no alteren el pH del agua</li>
                                    <li>Superficies lisas facilitan la conducción del agua</li>
                                    <li>Colores claros reducen la temperatura del agua</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-exclamation-triangle"></i> Precauciones</h4>
                                <ul>
                                    <li>Evitar superficies de asfalto o materiales con químicos</li>
                                    <li>Superficies porosas pueden albergar bacterias</li>
                                    <li>Materiales metálicos pueden corroerse con el tiempo</li>
                                </ul>
                            </div>
                        </div>
                    </div>',

                    'canaletas' => '
                    <div class="material-card">
                        <h3><i class="fas fa-tint"></i> Canaletas y Bajantes</h3>
                        <p>Materiales para el sistema de conducción del agua:</p>

                        <h4>Opciones disponibles:</h4>
                        <table class="comparison-table">
                            <tr>
                                <th>Material</th>
                                <th>Ventajas</th>
                                <th>Desventajas</th>
                                <th>Vida útil</th>
                            </tr>
                            <tr>
                                <td>PVC</td>
                                <td>Liviano, fácil instalación, bajo costo</td>
                                <td>Puede deformarse con calor extremo</td>
                                <td>20-30 años</td>
                            </tr>
                            <tr>
                                <td>Aluminio</td>
                                <td>Resistente, ligero, no se oxida</td>
                                <td>Costo moderado, puede abollarse</td>
                                <td>30-50 años</td>
                            </tr>
                            <tr>
                                <td>Acero inoxidable</td>
                                <td>Muy duradero, aspecto premium</td>
                                <td>Costo elevado, instalación especializada</td>
                                <td>50+ años</td>
                            </tr>
                            <tr>
                                <td>Cobre</td>
                                <td>Antibacteriano, duradero, estético</td>
                                <td>Costo muy alto, requiere mantenimiento</td>
                                <td>50+ años</td>
                            </tr>
                        </table>

                        <div class="material-pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-check-circle"></i> Instalación adecuada</h4>
                                <ul>
                                    <li>Inclinar ligeramente (1-2%) para buen flujo</li>
                                    <li>Instalar protectores contra hojas</li>
                                    <li>Usar soportes cada 60-80 cm</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-exclamation-triangle"></i> Problemas comunes</h4>
                                <ul>
                                    <li>Acumulación de sedimentos en curvas</li>
                                    <li>Fugas en uniones mal selladas</li>
                                    <li>Congelamiento en climas fríos</li>
                                </ul>
                            </div>
                        </div>
                    </div>',

                    'filtros' => '
                    <div class="material-card">
                        <h3><i class="fas fa-filter"></i> Sistemas de Filtrado</h3>
                        <p>Materiales y tecnologías para filtrar el agua pluvial:</p>

                        <h4>Tipos de filtros:</h4>
                        <table class="comparison-table">
                            <tr>
                                <th>Tipo</th>
                                <th>Materiales</th>
                                <th>Eficiencia</th>
                                <th>Mantenimiento</th>
                            </tr>
                            <tr>
                                <td>Filtro de malla</td>
                                <td>Acero inoxidable, nylon</td>
                                <td>Partículas &gt; 1mm</td>
                                <td>Limpieza mensual</td>
                            </tr>
                            <tr>
                                <td>Filtro de arena</td>
                                <td>Arena sílica, grava, carbón</td>
                                <td>Partículas &gt; 0.1mm</td>
                                <td>Lavado cada 3-6 meses</td>
                            </tr>
                            <tr>
                                <td>Filtro de cartucho</td>
                                <td>Celulosa, polipropileno</td>
                                <td>Partículas &gt; 5 micras</td>
                                <td>Reemplazo cada 6-12 meses</td>
                            </tr>
                            <tr>
                                <td>Filtro UV</td>
                                <td>Lámpara UV, cuarzo</td>
                                <td>Bacterias y virus</td>
                                <td>Cambio lámpara anual</td>
                            </tr>
                        </table>

                        <div class="material-pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-check-circle"></i> Buenas prácticas</h4>
                                <ul>
                                    <li>Instalar filtro grueso antes del almacenamiento</li>
                                    <li>Usar filtro fino si el agua será para consumo</li>
                                    <li>Incluir sistema de bypass para mantenimiento</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-exclamation-triangle"></i> Riesgos</h4>
                                <ul>
                                    <li>Filtros obstruidos reducen captación</li>
                                    <li>Materiales no adecuados pueden contaminar</li>
                                    <li>Filtros mal mantenidos pierden efectividad</li>
                                </ul>
                            </div>
                        </div>
                    </div>',

                    'almacenamiento' => '
                    <div class="material-card">
                        <h3><i class="fas fa-water"></i> Tanques de Almacenamiento</h3>
                        <p>Materiales para cisternas y depósitos de agua:</p>

                        <h4>Comparativa de materiales:</h4>
                        <table class="comparison-table">
                            <tr>
                                <th>Material</th>
                                <th>Capacidad</th>
                                <th>Costo</th>
                                <th>Recomendaciones</th>
                            </tr>
                            <tr>
                                <td>Polietileno (plástico)</td>
                                <td>Hasta 20,000L</td>
                                <td>Bajo a moderado</td>
                                <td>Opaco para evitar algas</td>
                            </tr>
                            <tr>
                                <td>Fibra de vidrio</td>
                                <td>Hasta 50,000L</td>
                                <td>Moderado a alto</td>
                                <td>Excelente para enterrar</td>
                            </tr>
                            <tr>
                                <td>Concreto</td>
                                <td>Ilimitado</td>
                                <td>Alto (construcción)</td>
                                <td>Requiere impermeabilización</td>
                            </tr>
                            <tr>
                                <td>Acero inoxidable</td>
                                <td>Hasta 100,000L</td>
                                <td>Muy alto</td>
                                <td>Para uso comercial</td>
                            </tr>
                        </table>

                        <div class="material-pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-check-circle"></i> Características ideales</h4>
                                <ul>
                                    <li>Opaco para evitar crecimiento de algas</li>
                                    <li>Tapa hermética contra insectos</li>
                                    <li>Válvula de desagüe para limpieza</li>
                                    <li>Resistente a UV si está expuesto</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-exclamation-triangle"></i> Problemas comunes</h4>
                                <ul>
                                    <li>Materiales transparentes permiten algas</li>
                                    <li>Tanques no certificados pueden liberar químicos</li>
                                    <li>Estructuras débiles pueden colapsar</li>
                                </ul>
                            </div>
                        </div>
                    </div>',

                    'distribucion' => '
                    <div class="material-card">
                        <h3><i class="fas fa-project-diagram"></i> Sistema de Distribución</h3>
                        <p>Materiales para llevar el agua a su punto de uso:</p>

                        <h4>Tuberías y accesorios:</h4>
                        <table class="comparison-table">
                            <tr>
                                <th>Material</th>
                                <th>Presión Máx.</th>
                                <th>Instalación</th>
                                <th>Compatibilidad</th>
                            </tr>
                            <tr>
                                <td>PVC</td>
                                <td>10 bar</td>
                                <td>Fácil (pegamento)</td>
                                <td>Agua fría sólo</td>
                            </tr>
                            <tr>
                                <td>CPVC</td>
                                <td>15 bar</td>
                                <td>Fácil (pegamento)</td>
                                <td>Agua caliente y fría</td>
                            </tr>
                            <tr>
                                <td>Polietileno</td>
                                <td>8 bar</td>
                                <td>Termofusión o accesorios</td>
                                <td>Exterior/enterrar</td>
                            </tr>
                            <tr>
                                <td>Acero inoxidable</td>
                                <td>30+ bar</td>
                                <td>Soldadura/conexiones</td>
                                <td>Todo uso</td>
                            </tr>
                        </table>

                        <div class="material-pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-check-circle"></i> Recomendaciones</h4>
                                <ul>
                                    <li>Usar tuberías de color diferente a agua potable</li>
                                    <li>Incluir válvulas de purga en puntos bajos</li>
                                    <li>Prever acceso para mantenimiento</li>
                                    <li>Aislar tuberías en zonas de congelamiento</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-exclamation-triangle"></i> Consideraciones</h4>
                                <ul>
                                    <li>Algunos plásticos se degradan con UV</li>
                                    <li>Metales pueden corroerse con el tiempo</li>
                                    <li>Diámetro inadecuado afecta presión</li>
                                </ul>
                            </div>
                        </div>
                    </div>'
                );

                foreach ($materialContents as $id => $content) {
                    echo '<div class="material-content" id="'.$id.'-content">'.$content.'</div>';
                }
                ?>
            </div>
        </section>
    </div>

    <footer class="footer-materiales">
        <p>Sistema de Información sobre Materiales para Captación Pluvial &copy; <?php echo date('Y'); ?></p>
        <p>Desarrollado para promover sistemas de captación sostenibles y eficientes</p>
    </footer>

    <script src="../scripts/materiales.js" defer></script>
</body>
</html>
