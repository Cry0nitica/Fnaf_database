<?php

$host = "localhost";
$database = "your_database_name";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    exit("Database connection failed: " . $error->getMessage());
}
