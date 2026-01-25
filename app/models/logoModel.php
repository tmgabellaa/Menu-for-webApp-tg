<?php

function getLogo($db)
{

    try {
        $sql = "SELECT * FROM logo";
        $res = $db->query($sql);
        return $res->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}