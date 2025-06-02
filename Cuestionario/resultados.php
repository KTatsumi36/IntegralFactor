<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Cuestionario</title>
    <style>
        body {
            background-color: #f1f8e9;
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        h2 {
            color: #33691e;
            text-align: center;
        }
        .resultado {
            background-color: #dcedc8;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }
        ul {
            color: #558b2f;
        }
    </style>
</head>
<body>
    <h2>Resultados del Cuestionario</h2>
    <div class="resultado">
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
            echo "<h3>Recomendaciones:</h3><ul>";
            foreach ($recomendaciones as $rec) {
                echo "<li>$rec</li>";
                echo "<li>Revisar el material de estudio sobre el tema.</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>