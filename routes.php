<?php
require_once __DIR__ . '/app/config/database.php';
require_once __DIR__ . '/app/controllers/UserController.php';

$db = (new Database())->connect();
$userController = new UserController($db);

$requestMethod = $_SERVER['REQUEST_METHOD'];

if (($requestUri == '/users' ||  $requestUri == '/') && $requestMethod == 'GET') {
    $userController->index();
} elseif ($requestUri == '/users/create' && $requestMethod == 'GET') {
    $userController->create();
} elseif ($requestUri == '/users/store' && $requestMethod == 'POST') {
    $userController->store();
} elseif (preg_match('#^/users/(\d+)/edit$#', $requestUri, $matches) && $requestMethod == 'GET') {
    $userController->edit($matches[1]);
} elseif (preg_match('#^/users/(\d+)/update$#', $requestUri, $matches) && $requestMethod == 'POST') {
    $userController->update($matches[1]);
} elseif (preg_match('#^/users/(\d+)/delete$#', $requestUri, $matches) && $requestMethod == 'POST') {
    $userController->delete($matches[1]);
} else {
    echo "404 - Página no encontrada";
}
