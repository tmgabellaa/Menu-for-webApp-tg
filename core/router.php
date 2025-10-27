<?php

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
        require BASE_PATH . 'app/controllers/menuController.php';
        break;
        default:
}
