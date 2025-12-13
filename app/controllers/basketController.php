<?php
require_once BASE_PATH . 'app/models/productsModel.php';

function click($db): false|string
{
    $response = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if ($data['checking'] === 'Misha228') {
            $arr = explode('-', $data['id']);
            $id = end($arr);


            if(!isset($_SESSION['basket'][$id]))
            {
                $_SESSION['basket'][$id]['quantity'] = 1;
            } else {
                $_SESSION['basket'][$id]['quantity']++;
            }

            if (!isset($_SESSION['basket']['total_cost'])){
                $_SESSION['basket']['total_cost'] = 0;
            }
            $st_time = microtime(true);
            $cost = getCost($db, $id);
            $en_time = microtime(true);
            if (is_numeric($cost))
            {
                $_SESSION['basket']['total_cost'] += $cost;
            } else {
                $message = "cost is not numeric: $cost";
            }



            header('Content-Type: application/json;charset=utf-8');
            $response = [
                'quantity' => $_SESSION['basket'][$id]['quantity'],
                'total_cost' => $_SESSION['basket']['total_cost'],
                'message' => $message ?? null,
                'query_sql_time' => $en_time - $st_time,
            ];
        }
    }
    return json_encode($response);
}
