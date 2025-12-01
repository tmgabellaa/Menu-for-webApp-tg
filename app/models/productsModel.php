<?php

function getProducts($db)
{
 $sql = "SELECT * FROM products";
 $res = $db->query($sql);
 return $res->fetchAll();
}

function getProductsForId_categories($db, $currentId)
{
    try {
        $res = $db->prepare("SELECT * FROM products WHERE id_categories = :id_categories");
        $res->execute(['id_categories' => $currentId]);
        return $res->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }

}

function getCost($db, $id)
{
    try {
        $res = $db->prepare("SELECT price FROM products WHERE id = :id");
        $res->execute(['id' => $id]);
        return $res->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}