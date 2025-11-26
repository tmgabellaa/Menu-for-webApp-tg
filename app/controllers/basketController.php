<?php



function actionIndexBasket($db){

}


function click()
{
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $id = $data['id'];

    if(!isset($_SESSION['basket'])){
        $_SESSION['basket'][$id]['quantity'] = 1;
    }
    $_SESSION['basket'][$id]['quantity']++;


    header('content-type: application/json');
    $response = [
      'quantity' => $_SESSION['basket'][$id]['quantity'],
    ];
    return json_encode($response);
}
