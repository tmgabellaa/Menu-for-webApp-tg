<?php
require_once BASE_PATH . 'app/models/navbarModel.php';
require_once BASE_PATH . 'app/models/logoModel.php';
require_once BASE_PATH . 'config/db.php';

$db = getDB();
function showMenu($db) : void
{
    $navbar = getNavbar($db);
    $logo = getLogo($db);
    include BASE_PATH . 'app/views/index.php';
}


