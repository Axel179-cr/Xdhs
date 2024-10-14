<?php
header('Content-Type: application/json');

// Verificamos si se está realizando una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los datos enviados desde la página web
    $datos = json_decode(file_get_contents('php://input'), true);

    // Guardamos los IP addresses en un archivo de texto
    file_put_contents('ip-addresses.txt', $datos['ipAddresses'] . PHP_EOL, FILE_APPEND);
}
?>