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

    // select single data
    $sql = "select * from pegawai limit 1";
    $stmt = $pdo->query($sql);
    $data = $stmt->fetch();
    echo $data['nip'] . $data['nama'] . $data['kota'];
    
    // select multiple data
    $sql = "select * from pegawai";
    $stmt = $pdo->query($sql);
    while ($data = $stmt->fetch()) {
        echo $data['nip'] . $data['nama'] . $data['kota'];
    }

    // select multiple using fetchAll()
    $sql = "select * from pegawai";
    $row = $pdo->query($sql)->fetchAll();
    foreach ($row as $data){
        echo $data['nip'] . $data['nama'] . $data['kota'];
    }

    // prepare statement for select query using named placeholder
    $stmt = $pdo->prepare("select * from pegawai where nip > :angka");
    $stmt->execute(['angka'=>5]);
    while ($data = $stmt->fetch()) {
        echo $data['nip'] . $data['nama'] . $data['kota'];
    }

    // prepare statement for select query using position placeholder
    $stmt = $pdo->prepare("select * from pegawai where nip < ?");
    $stmt->execute([6]);
    while ($data = $stmt->fetch()) {
        echo $data['nip'] . $data['nama'] . $data['kota'];
    }

?>