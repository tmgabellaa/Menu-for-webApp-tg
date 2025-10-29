<?php
require_once BASE_PATH . 'config/db.php';

$db = getDB();

function getNavbar($db)
{
    $sql = 'SELECT * FROM navbar';
    $stmt = $db->query($sql);
    return $stmt->fetchAll();
}
