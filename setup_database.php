<?php
// setup_database.php

require_once('config.php');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS " . DB_NAME);

    // Switch to the specified database
    $pdo->exec("USE " . DB_NAME);

    // Create the teachers table
    $pdo->exec("
    CREATE TABLE IF NOT EXISTS students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
);
");

    // Create the students table
   $pdo->exec("
   CREATE TABLE IF NOT EXISTS teachers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL
);
");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS modules (
            id INT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL,
            factor INT NOT NULL
    )
    ");

  
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
