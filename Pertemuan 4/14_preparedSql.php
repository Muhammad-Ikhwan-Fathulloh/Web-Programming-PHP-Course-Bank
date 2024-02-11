<?php
    $host = "localhost";
    $port = 3308;
    $db = "pemprov_dki";
    $user = "root";
    // open connection
    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // handle exc error
        echo "Sukses terhubung ke database UPI YAI<br>";
    } catch(PDOException $e) {
        echo "Gagal terhubung: " . $e->getMessage() . "<br>";
    }

    // prepared statement & named placeholder
    $sql = "insert into pegawai (nama, kota, isMarried) values (:n, :k, :i)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['n'=>'Gilang', 'k'=>'Jakarta Pusat', 'i'=>true]);
    $stmt->execute(['n'=>'Hani', 'k'=>'Jakarta Pusat', 'i'=>true]);
    $stmt->execute(['n'=>'Inneke', 'k'=>'Jakarta Pusat', 'i'=>true]);
    echo "Data sukses diinput";

    // prepared statement & position placeholder
    $sql = "insert into pegawai (nama, kota, isMarried) values (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["Jani", "Jakarta Timur", true]);
    echo "Data sukses diinput";
?>