<?php

function getProducts($db)
{
 $sql = "SELECT * FROM products";
 $res = $db->query($sql);
 return $res->fetchAll();
}