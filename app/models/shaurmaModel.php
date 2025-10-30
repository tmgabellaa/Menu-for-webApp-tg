<?php
require_once BASE_PATH . 'config/db.php';

function getShaurma($db){
    $res = $db->query('SELECT * FROM shaurma');
    return $res->fetchAll();
}