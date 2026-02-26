<?php
require_once BASE_PATH . 'config/db.php';
require_once BASE_PATH . 'app/controllers/menuController.php';
require_once BASE_PATH . 'app/controllers/basketController.php';
$route = $_SERVER['REQUEST_URI'];

/** @var object $db */
switch ($route) {
    case '/basket/add-click':
        echo click($db);
        break;
    case '/basket/delete-click':
        echo clickMinus($db);
        break;
    default:
        actionIndexMenu($db);
}
