<?php
$basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = str_replace('\\', '/', $basePath); 

$requestUri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);
//$requestUri = explode('?', $requestUri)[0]; // Remover parámetros de consulta

// Define las rutas permitidas
require_once __DIR__ . '/routes.php';
