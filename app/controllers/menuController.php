<?php
require_once BASE_PATH . 'app/models/navbarModel.php';
require_once BASE_PATH . 'app/models/logoModel.php';
require_once BASE_PATH . 'config/db.php';
require_once  BASE_PATH . 'app/models/drinksModel.php';
require_once BASE_PATH . 'app/models/kebabModel.php';
require_once BASE_PATH . 'app/models/shaurmaModel.php';

$db = getDB();
function showMenu($db) : void
{
    $navbar = getNavbar($db);
    $logo = getLogo($db);
    $drinks = getDrinks($db);
    $kebab = getKebab($db);
    $shaurma = getShaurma($db);


    include BASE_PATH . 'app/views/index.php';
}


