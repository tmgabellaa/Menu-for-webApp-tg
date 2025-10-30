<?php

function getNavbar($db)
{
    $sql = 'SELECT * FROM navbar';
    $stmt = $db->query($sql);
    return $stmt->fetchAll();
}
