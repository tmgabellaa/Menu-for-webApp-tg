<?php
require_once BASE_PATH . 'app/models/categoriesModel.php';
require_once BASE_PATH . 'app/models/logoModel.php';
require_once BASE_PATH . 'app/models/productsModel.php';
require_once BASE_PATH . 'config/db.php';


$db = getDB();
function showMenu($db) : void
{
    $categories = getCategories($db)?? [];
    $logo = getLogo($db)?? [];
    $products = getProducts($db)?? [];


    include BASE_PATH . 'app/views/index.php';
}


