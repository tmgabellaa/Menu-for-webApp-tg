<?php
require_once BASE_PATH . '/config/db.php';

$db = getDB();
function getLogo($db)
{

    try {
        $sql = "SELECT * FROM logo";
        $res = $db->query($sql);
        return $res->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}