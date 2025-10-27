<?php

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/admin':
        break;
    default:
        require BASE_PATH . 'app/controllers/menuController.php';
}
