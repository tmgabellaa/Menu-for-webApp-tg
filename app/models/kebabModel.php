<?php
require_once BASE_PATH . 'config/db.php';

function getKebab($db)
{
    $res =  $db->query('SELECT * FROM kebab');
    return $res->fetchAll();
}