<?php
header('Content-Type: application/json');

// Verificamos si se está realizando una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenemos los datos enviados desde la página web
    $datos = json_decode(file_get_contents('php://input'), true);

    // Guardamos los IP addresses en el archivo txt
    $contenido = file_get_contents('ip-addresses.txt');
    $ipAddresses = explode(PHP_EOL, $contenido);

    $ipAddresses = array_merge($ipAddresses, $datos['ipAddresses']);
    $contenido = implode(PHP_EOL, $ipAddresses);

    file_put_contents('ip-addresses.txt', $contenido);
}
?>
