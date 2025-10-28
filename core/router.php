<?php
require BASE_PATH . 'app/controllers/menuController.php';
$route = $_SERVER['REQUEST_URI'];

/** @var object $db */
switch ($route) {
    case '/admin':
        break;
    default:
        showMenu($db);
}
