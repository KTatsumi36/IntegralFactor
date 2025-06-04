<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["from_name"]);
    $correo = htmlspecialchars($_POST["reply_to"]);
    $comentario = htmlspecialchars($_POST["message"]);
    $fecha = date("Y-m-d H:i:s");

    $contenido = "[$fecha] Nombre: $nombre | Correo: $correo\nComentario:\n$comentario\n------------------------\n";

    $archivo = "../comentarios.txt"; // Asegúrate de que esta ruta tenga permisos de escritura
    file_put_contents($archivo, $contenido, FILE_APPEND | LOCK_EX);

    header("Location: ../html/contacto.html?guardado=1");
    exit;
}
?>
