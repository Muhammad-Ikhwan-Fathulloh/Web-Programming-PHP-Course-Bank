<?php
    $host = "localhost";
    $port = 3308;
    $user = "root";
    // open connection
    try {
        $pdo = new PDO("mysql:host=$host;port=$port", $user, "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // handle exc error
        echo "Sukses terhubung ke database UPI YAI<br>";
    } catch(PDOException $e) {
        echo "Gagal terhubung: " . $e->getMessage() . "<br>";
    }

    // create database
    $sql = "create database pemprov_dki";
    $pdo->exec($sql);
    echo "Database sukses dibuat";
?>