<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Captación de Agua Pluvial</title>
    <style>
        /* CSS */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f9fc;
        }
        
        header {
            background-color: #1a6fc9;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            text-align: center;
        }
        
        h1 {
            margin: 0;
            font-size: 2.2em;
        }
        
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .info-section, .calculator {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        h2 {
            color: #1a6fc9;
            border-bottom: 2px solid #e1e1e1;
            padding-bottom: 10px;
        }
        
        .benefits-list {
            list-style-type: none;
            padding: 0;
        }
        
        .benefits-list li {
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="%231a6fc9"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>') no-repeat left center;
            padding-left: 30px;
            margin-bottom: 15px;
            line-height: 1.8;
        }
        
        form {
            display: grid;
            gap: 15px;
        }
        
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #1a6fc9;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: #145da0;
        }
        
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f4fd;
            border-radius: 4px;
            border-left: 4px solid #1a6fc9;
        }
        
        .highlight {
            font-weight: bold;
            color: #1a6fc9;
            font-size: 1.1em;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
        }
        
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Captación de Agua Pluvial</h1>
        <p>Calcula tu potencial de recolección y contribuye al medio ambiente</p>
    </header>
    
    <div class="container">
        <section class="info-section">
            <h2>Importancia de la Captación de Agua Pluvial</h2>
            <p>La captación de agua de lluvia es una solución sostenible que permite aprovechar un recurso natural gratuito y reducir el impacto ambiental.</p>
            
            <h3>Beneficios principales:</h3>
            <ul class="benefits-list">
                <li>Reduce la demanda de agua de la red pública o de pozos</li>
                <li>Disminuye la factura de agua potable</li>
                <li>Mitiga problemas de escorrentía e inundaciones</li>
                <li>Proporciona agua para riego, limpieza y otros usos</li>
                <li>Contribuye a la sostenibilidad ambiental</li>
                <li>Es ideal para zonas con problemas de abastecimiento</li>
            </ul>
        </section>
    </div>
    
    <footer>
        <p>Sistema desarrollado para promover la sostenibilidad y el uso eficiente del agua</p>
        <p>© <?php echo date('Y'); ?> - Todos los derechos reservados</p>
    </footer>
</body>
</html>