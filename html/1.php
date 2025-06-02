<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Captación de Agua Pluvial</title>
    <style>
        /* CSS */
        :root {
            --primary-color: #1a6fc9;
            --secondary-color: #145da0;
            --accent-color: #e8f4fd;
            --text-color: #333;
            --light-text: #f5f9fc;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: #f5f9fc;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: var(--primary-color);
            color: var(--light-text);
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .info-section {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e1e1e1;
        }
        
        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .info-button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .info-button:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .info-button.active {
            background-color: var(--secondary-color);
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .content-display {
            background-color: var(--accent-color);
            padding: 25px;
            border-radius: 8px;
            border-left: 5px solid var(--primary-color);
            min-height: 200px;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .info-content {
            display: none;
        }
        
        .info-content.active {
            display: block;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            color: #666;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .button-container {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Sistema de Captación de Agua Pluvial</h1>
            <p class="subtitle">Conoce la importancia y beneficios de recolectar agua de lluvia</p>
        </header>
        
        <section class="info-section">
            <h2>Información Importante</h2>
            
            <div class="button-container">
                <button class="info-button" onclick="showInfo('benefits')">Beneficios Clave</button>
                <button class="info-button" onclick="showInfo('components')">Componentes del Sistema</button>
                <button class="info-button" onclick="showInfo('maintenance')">Mantenimiento</button>
                <button class="info-button" onclick="showInfo('environment')">Impacto Ambiental</button>
            </div>
            
            <div class="content-display" id="contentDisplay">
                <?php
                // PHP - Contenido inicial
                echo '<div class="info-content active" id="default-content">
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
                
                // PHP - Contenido dinámico
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
                
                // Mostrar todos los contenidos (se ocultan con CSS y se muestran con JS)
                foreach ($infoContents as $id => $content) {
                    echo '<div class="info-content" id="'.$id.'-content">'.$content.'</div>';
                }
                ?>
            </div>
        </section>
    </div>
    
    <footer>
        <p>Sistema de Información sobre Captación Pluvial &copy; <?php echo date('Y'); ?></p>
        <p>Contribuyendo a un futuro más sostenible</p>
    </footer>
    
    <script>
        // JavaScript para manejar la interactividad
        function showInfo(infoType) {
            // Ocultar todos los contenidos
            const allContents = document.querySelectorAll('.info-content');
            allContents.forEach(content => {
                content.classList.remove('active');
            });
            
            // Mostrar el contenido seleccionado
            const selectedContent = document.getElementById(infoType + '-content');
            if (selectedContent) {
                selectedContent.classList.add('active');
            }
            
            // Resaltar el botón activo
            const allButtons = document.querySelectorAll('.info-button');
            allButtons.forEach(button => {
                button.classList.remove('active');
            });
            
            event.target.classList.add('active');
        }
        
        // Efecto adicional para mejor UX
        document.querySelectorAll('.info-button').forEach(button => {
            button.addEventListener('click', function() {
                // Animación de carga del contenido
                const contentDisplay = document.getElementById('contentDisplay');
                contentDisplay.style.opacity = '0.5';
                setTimeout(() => {
                    contentDisplay.style.opacity = '1';
                }, 300);
            });
        });
    </script>
</body>
</html>