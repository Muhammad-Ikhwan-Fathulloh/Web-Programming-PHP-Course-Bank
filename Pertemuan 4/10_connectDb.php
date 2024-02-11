<?php
    $host = "localhost";
    $port = 3308;
    $db = "pemprov_dki";
    $user = "root";
    $password = "";

    // open connection
    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // handle exc error
        echo "Sukses terhubung ke database UPI YAI<br>";
    } catch(PDOException $e) {
        echo "Gagal terhubung: " . $e->getMessage() . "<br>";
    }
?>