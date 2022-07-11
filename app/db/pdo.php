<?php

$user = getenv('USERNAME');
$pass = getenv('PASSWORD');
$host = 'localhost';
$dbName = 'devnotes';
$dsn = "mysql:host=$host;dbname=$dbName";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error = $e->getMessage();
    echo "ERRO: $error";
}
