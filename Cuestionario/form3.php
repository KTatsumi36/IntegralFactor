<!DOCTYPE html>
<html>
<head>
    <title>Cuestionario: Agua Pluvial</title>
    <style>
        body {
            background-color: #ede7f6;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #5e35b1;
        }
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            max-width: 700px;
            margin: auto;
        }
        p {
            font-weight: bold;
        }
        button {
            background-color: #5e35b1;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Responde las siguientes preguntas</h2>
    <form action="resultados.php" method="post">
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
            echo "<p>" . ($i + 1) . ". " . $preguntas[$i] . "</p>";
            for ($j = 0; $j < 3; $j++) {
                echo "<input type='radio' name='p$i' value='$j' required> " . $respuestas[$i][$j] . "<br>";
            }
            echo "<br>";
        }
        ?>
        <button type="submit">Enviar respuestas</button>
    </form>
</body>
</html>