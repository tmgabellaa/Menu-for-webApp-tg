<?php

require_once BASE_PATH . 'app/models/productsModel.php';
require_once BASE_PATH . 'config/db.php';

$db = getDb();

function click($db): false|string
{
    $response = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if ($data['checking'] === 'Misha228') {
            $arr = explode('-', $data['id']);
            $id = end($arr);

            $_SESSION['basket'][$id]['cost'] = getCost($db, $id);



            if(!isset($_SESSION['basket'][$id]))
            {
                $_SESSION['basket'][$id]['quantity'] = 1;
            } else {
                $_SESSION['basket'][$id]['quantity']++;
            }

            header('Content-Type: application/json;charset=utf-8');
            $response = [
                'quantity' => $_SESSION['basket'][$id]['quantity'],
            ];
        }
    }
    return json_encode($response);
}
