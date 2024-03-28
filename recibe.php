<?php
header("Content-Type: text/html; charset=UTF-8");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $sexo = $_POST["sexo"];
    $boletin = isset($_POST["boletin"]) ? "Sí" : "No";
    $comentario = $_POST["comentario"];
    $carrera = $_POST["carrera"];
    $pasw = $_POST["pasw"];
    $promedio = $_POST["promedio"];
    $fecha = $_POST["fecha"];

    echo "Nombre: $nombre<br>";
    echo "Correo: $correo<br>";
    echo "Genero: $sexo<br>";
    echo "Recibir Boletin: $boletin<br>";
    echo "Comentario: $comentario<br>";
    echo "Carrera: ";
    switch ($carrera) {
        case "1":
            echo "Ing. Informatica";
            break;
        case "2":
            echo "Ing. Computacion";
            break;
        default:
            echo "No especificada";
    }
    echo "<br>";
    echo "Contraseña: $pasw<br>";
    echo "Promedio: $promedio<br>";
    echo "Fecha de nacimiento: $fecha<br>";
} else {
    echo "No se han recibido datos del formulario.";
}
?>
