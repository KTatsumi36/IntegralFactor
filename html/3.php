<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiales para Captación de Agua Pluvial</title>
    <style>
        /* CSS */
        :root {
            --primary-color: #2c7be5;
            --secondary-color: #1a5cb8;
            --accent-color: #e6f0fd;
            --text-color: #333;
            --light-text: #ffffff;
            --dark-bg: #2a3547;
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
            background-color: #f8fafc;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: var(--dark-bg);
            color: var(--light-text);
            padding: 40px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background-image: linear-gradient(135deg, var(--dark-bg) 0%, var(--secondary-color) 100%);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .materials-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        h2 {
            color: var(--primary-color);
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e1e8ed;
            font-size: 1.8rem;
        }
        
        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .material-button {
            background-color: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 18px;
            border-radius: 8px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .material-button:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(44, 123, 229, 0.2);
        }
        
        .material-button.active {
            background-color: var(--primary-color);
            color: white;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
            border-color: var(--secondary-color);
        }
        
        .material-button i {
            font-size: 1.3rem;
        }
        
        .content-display {
            background-color: var(--accent-color);
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid var(--primary-color);
            min-height: 300px;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .material-content {
            display: none;
        }
        
        .material-content.active {
            display: block;
        }
        
        .material-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-left: 4px solid var(--primary-color);
        }
        
        .material-card h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .material-card h3 i {
            font-size: 1.2rem;
        }
        
        .material-pros-cons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 15px;
        }
        
        .pros, .cons {
            padding: 15px;
            border-radius: 8px;
        }
        
        .pros {
            background-color: #e8f7f0;
            border-left: 4px solid #2ecc71;
        }
        
        .cons {
            background-color: #feefef;
            border-left: 4px solid #e74c3c;
        }
        
        .pros h4, .cons h4 {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .pros h4 {
            color: #27ae60;
        }
        
        .cons h4 {
            color: #e74c3c;
        }
        
        ul {
            padding-left: 20px;
        }
        
        li {
            margin-bottom: 8px;
        }
        
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        .comparison-table th, .comparison-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e8ed;
        }
        
        .comparison-table th {
            background-color: var(--primary-color);
            color: white;
        }
        
        .comparison-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        
        .comparison-table tr:hover {
            background-color: #f1f7fe;
        }
        
        footer {
            text-align: center;
            padding: 30px;
            margin-top: 40px;
            color: #666;
            font-size: 0.9rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.02);
        }
        
        @media (max-width: 768px) {
            .button-container {
                grid-template-columns: 1fr;
            }
            
            .material-pros-cons {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-tint"></i> Materiales para Captación de Agua Pluvial</h1>
            <p class="subtitle">Selecciona los componentes para conocer los materiales recomendados y sus características</p>
        </header>
        
        <section class="materials-section">
            <h2><i class="fas fa-clipboard-list"></i> Componentes del Sistema</h2>
            
            <div class="button-container">
                <button class="material-button" onclick="showMaterial('superficie')">
                    <i class="fas fa-home"></i> Superficie de Captación
                </button>
                <button class="material-button" onclick="showMaterial('canaletas')">
                    <i class="fas fa-tint"></i> Canaletas
                </button>
                <button class="material-button" onclick="showMaterial('filtros')">
                    <i class="fas fa-filter"></i> Filtros
                </button>
                <button class="material-button" onclick="showMaterial('almacenamiento')">
                    <i class="fas fa-water"></i> Almacenamiento
                </button>
                <button class="material-button" onclick="showMaterial('distribucion')">
                    <i class="fas fa-project-diagram"></i> Distribución
                </button>
            </div>
            
            <div class="content-display" id="contentDisplay">
                <?php
                // PHP - Contenido inicial
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
                
                // PHP - Contenido dinámico
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
                                <td>Partículas > 1mm</td>
                                <td>Limpieza mensual</td>
                            </tr>
                            <tr>
                                <td>Filtro de arena</td>
                                <td>Arena sílica, grava, carbón</td>
                                <td>Partículas > 0.1mm</td>
                                <td>Lavado cada 3-6 meses</td>
                            </tr>
                            <tr>
                                <td>Filtro de cartucho</td>
                                <td>Celulosa, polipropileno</td>
                                <td>Partículas > 5 micras</td>
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
                
                // Mostrar todos los contenidos (se ocultan con CSS y se muestran con JS)
                foreach ($materialContents as $id => $content) {
                    echo '<div class="material-content" id="'.$id.'-content">'.$content.'</div>';
                }
                ?>
            </div>
        </section>
    </div>
    
    <footer>
        <p>Sistema de Información sobre Materiales para Captación Pluvial &copy; <?php echo date('Y'); ?></p>
        <p>Desarrollado para promover sistemas de captación sostenibles y eficientes</p>
    </footer>
    
    <script>
        // JavaScript para manejar la interactividad
        function showMaterial(materialType) {
            // Ocultar todos los contenidos
            const allContents = document.querySelectorAll('.material-content');
            allContents.forEach(content => {
                content.classList.remove('active');
            });
            
            // Mostrar el contenido seleccionado
            const selectedContent = document.getElementById(materialType + '-content');
            if (selectedContent) {
                selectedContent.classList.add('active');
            }
            
            // Resaltar el botón activo
            const allButtons = document.querySelectorAll('.material-button');
            allButtons.forEach(button => {
                button.classList.remove('active');
            });
            
            event.target.classList.add('active');
            
            // Scroll suave al contenido
            document.getElementById('contentDisplay').scrollIntoView({
                behavior: 'smooth'
            });
        }
        
        // Efecto adicional para mejor UX
        document.querySelectorAll('.material-button').forEach(button => {
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