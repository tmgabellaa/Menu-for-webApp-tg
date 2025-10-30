<?php
require_once BASE_PATH . 'config/db.php';

function getDrinks($db)
{
    $sql = "SELECT * FROM drinks";
    $res = $db->query($sql);
    return $res->fetchAll();
}

