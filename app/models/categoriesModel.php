<?php

function getCategories($db)
{
    $sql = 'SELECT * FROM categories';
    $stmt = $db->query($sql);
    return $stmt->fetchAll();
}
