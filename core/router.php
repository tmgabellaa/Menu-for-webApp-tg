<?php
require_once BASE_PATH . 'app/controllers/menuController.php';
require_once BASE_PATH . 'app/controllers/basketController.php';
$route = $_SERVER['REQUEST_URI'];

/** @var object $db */
switch ($route) {
    case '/basket':
        click();
        break;
    default:
        actionIndexMenu($db);
}
