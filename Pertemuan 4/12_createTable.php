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

    // create table
    $sql = "create table pegawai (
        nip int not null auto_increment, 
        nama varchar(50) not null,
        kota set('Jakarta Utara', 'Jakarta Timur', 'Jakarta Barat', 'Jakarta Pusat', 'Jakarta Selatan', 'Kep. Seribu'),
        isMarried boolean,
        primary key (nip)
    )";
    $pdo->exec($sql);
    echo "Table sukses dibuat";
?>