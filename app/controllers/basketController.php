<?php



function actionIndexBasket($db){

}


function click()
{
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $id = $data['id'];

<<<<<<< Updated upstream

    if(!isset($_SESSION['basket']))
    {
        $_SESSION['basket'][$id]['count'] = 1;
=======
    if(isset($_SESSION['basket'])){
        $_SESSION['basket'][$id]['quantity'] = 1;
>>>>>>> Stashed changes
    }
    $_SESSION['basket'][$id]['quantity']++;

    header('content-type: application/json');
    $response = [
      'success' => true,
      'quantity' => $_SESSION['basket'][$id]['quantity'],
    ];
    return json_encode($response);

    $_SESSION['basket'][$id]['count']++;





}