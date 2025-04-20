<?php
// Recibir datos JSON del cuerpo de la petición
$datosJSON = file_get_contents("php://input");
$datos = json_decode($datosJSON, true);

// Verificar si los datos están completos
if (isset($datos['usuario']) && isset($datos['password'])) {
    $usuario = $datos['usuario'];
    $password = $datos['password'];
    $respuesta = array(
        "estado" => "ok",
        "mensaje" => "Datos recibidos correctamente"
    );
} else {
    $respuesta = array(
        "estado" => "error",
        "mensaje" => "Faltan datos"
    );
}

// Devolver respuesta en formato JSON
header('Content-Type: application/json');
echo json_encode($respuesta);
?>