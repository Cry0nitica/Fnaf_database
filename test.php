<?php
$host = "localhost";
$database = "fazbear_entertainment";
$username = "root";
$password = ""; // Common XAMPP default; use your actual password if set

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    $statement = $pdo->prepare(
        "INSERT INTO users (name, email) VALUES (:name, :email)"
    );

    $statement->execute([
        "name" => trim($_POST["name"] ?? ""),
        "email" => trim($_POST["email"] ?? "")
    ]);

    echo "User saved successfully.";
} catch (PDOException $error) {
    exit("Database operation failed.");
}
