<?php



function click(): false|string
{
    $response = ['ответ' => 'ниче не вышло дружок'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        if ($data['checking'] === 'Misha228') {
            $id = $data['id'];

            if(!isset($_SESSION['basket']))
            {
                $_SESSION['basket'][$id]['quantity'] = 1;
            }

            $_SESSION['basket'][$id]['quantity']++;

            header('Content-Type: application/json;charset=utf-8');
            $response = [
                'quantity' => $_SESSION['basket'][$id]['quantity'],
            ];

        }
    }
    return json_encode($response);
}
