<?php
require_once BASE_PATH . 'app/models/productsModel.php';

function click($db): false|string
{
    $response = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = getData();
            $id = getId($data);


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
            
            $response = [
                'quantity' => $_SESSION['basket'][$id]['quantity'],
                'total_cost' => $_SESSION['basket']['total_cost'],
                'message' => $message ?? null,
                'query_sql_time' => $en_time - $st_time,
            ];
        }
    header('Content-Type: application/json;charset=utf-8');
    return json_encode($response);
}

function clickMinus($db)
{
    $response = [];
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = getData();
        $id = getId($data);

        if(isset($_SESSION['basket'][$id]) && isset($_SESSION['basket']['total_cost']))
        {
            $_SESSION['basket'][$id]['quantity']--;

            $cost = getCost($db, $id);
            $_SESSION['basket']['total_cost'] -= $cost;


            $response = [
                'quantity' => $_SESSION['basket'][$id]['quantity'],
                'total_cost' => $_SESSION['basket']['total_cost'],
                'message' => $message ?? null,
            ];
        }
        else {
            $response = [
                'message' => 'not isset id or total cost'
            ];
        }

    }

    header('Content-Type: application/json;charset=utf-8');
    return json_encode($response);
}

function getData()
{
    $json = file_get_contents('php://input');
    return json_decode($json, true);
}

function getId($data)
{
    $arr = explode('-', $data['id']);
    return end($arr);
}


