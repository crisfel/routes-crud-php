<?php
require_once __DIR__ . '/app/config/database.php';
require_once __DIR__ . '/app/controllers/UserController.php';

$db = (new Database())->connect();
$userController = new UserController($db);

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestUri === '/users') {
    $userController->index();
} elseif ($requestUri === '/users/create') {
    $userController->create();
} elseif ($requestUri === '/users/store' && $requestMethod == 'POST') {
    $userController->store();
} else {
    echo "404 - Página no encontrada";
}