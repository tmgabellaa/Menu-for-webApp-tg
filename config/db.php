<?php

function getDB() : object|string
{
    $config = require BASE_PATH . 'config/config.php';
    try {
        return new PDO("mysql:host={$config['host']};port={$config['port']};dbname={$config['database']}", $config['user'], $config['password'],
            [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            ]);
    } catch (PDOException $e) {
       return 'Connection failed: ' . $e->getMessage();
    }
}


