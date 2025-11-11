<?php



function actionIndexBasket($db){

}


function click()
{
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $id = $data['id'];

    if(isset($_SESSION['basket'])){

    }


}