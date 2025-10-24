<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=names;charset=utf8mb4', 'names', 'JI[0d*vuM0(yLz79', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die();
}

/* 
$stmt = $pdo->prepare('SELECT * FROM names');
$stmt->execute();
var_dump($stmt->fetch(PDO::FETCH_ASSOC));
 */