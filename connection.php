<?php
 
 // Connexion à la base de données
    $host = "localhost";
    $database = "bijouterie";
    $user = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;