<?php
require_once BASE_PATH . 'app/models/categoriesModel.php';
require_once BASE_PATH . 'app/models/logoModel.php';
require_once BASE_PATH . 'app/models/productsModel.php';
require_once BASE_PATH . 'config/db.php';


$db = getDB();
function actionIndexMenu($db) : void
{
    $categories = getCategories($db)?? [];
    $logo = getLogo($db)?? [];
    $products = getProducts($db)?? [];

    $dataCategoriesOrProducts = [];
    foreach($categories as $category){
        $products = getProductsForId_categories($db, $category['id'])?? [];

        $dataCategoriesOrProducts[] = [
            'categories' => $category,
            'products' => $products,
        ];

    }


    include BASE_PATH . 'app/views/index.php';
}


