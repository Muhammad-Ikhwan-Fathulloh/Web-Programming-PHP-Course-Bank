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

    // insert single data
    $sql = "insert into pegawai (nama, kota, isMarried) values (
        'Ali', 'Jakarta Utara', true
    )";
    $pdo->exec($sql);
    echo "Data sukses diinput";

    // insert multiple data
    $pdo->beginTransaction();
    $pdo->exec("insert into pegawai (nama, kota, isMarried) values ('Budi', 'Jakarta Selatan', true)");
    $pdo->exec("insert into pegawai (nama, kota, isMarried) values ('Cici', 'Jakarta Barat', true)");
    $pdo->exec("insert into pegawai (nama, kota, isMarried) values ('Deni', 'Jakarta Pusat', true)");
    $pdo->exec("insert into pegawai (nama, kota, isMarried) values ('Euis', 'Kep. Seribu', true)");
    $pdo->commit();
    echo "Data sukses diinput";

?>