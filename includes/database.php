<?php

$db = mysqli_connect(
    $_ENV['DB_HOST'] ?? 'localhost:3000',
    $_ENV['DB_USER'] ?? 'root', 
    $_ENV['DB_PASS'] ?? '1511', 
    $_ENV['DB_NAME'] ?? 'devwebcamp'
);

$db->set_charset("utf8"); 

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_error();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
