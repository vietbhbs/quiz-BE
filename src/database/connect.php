<?php

$host = 'localhost';
$dbName = 'quiz_api';
$user = 'root';
$password = '';
$driver = 'mysql';

try {
    $conn = new PDO("$driver:host=$host;dbname=$dbName", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
} catch (PDOException $e) {
    file_put_contents(__DIR__ . '/PDOErrors.txt', $e->getMessage(), FILE_APPEND);
}