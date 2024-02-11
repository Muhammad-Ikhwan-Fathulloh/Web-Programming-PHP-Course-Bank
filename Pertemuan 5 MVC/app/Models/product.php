<?php
namespace App\Models;
use PDO;
use PDOException;
class Product {
    protected $id;
    protected $nama;
    protected $harga;

    // public method
    public function getId(){return $this->id;}
    public function getNama(){return $this->nama;}
    public function getHarga(){return $this->harga;}
    public function read(int $id){
        // data dummy
        // $this->id = 99;
        // $this->nama = 'Tes';
        // $this->harga = 123000;
        // return $this;

        // data from db
        $host = DB_HOST;
        $port = DB_PORT;
        $db = DB_NAME;
        $user = DB_USER;
        $pass = DB_PASS;
        try {
            $pdo = new PDO(
                "mysql:host=$host;port=$port;dbname=$db",
                $user,
                $pass
            );
        } catch (PDOException $e){
            echo $e;
        }
        $sql = "select * from product where id = " . $id;
        $stmt = $pdo->query($sql);
        $data = $stmt->fetch();
        $this->id = $data['id'];
        $this->nama = $data['nama'];
        $this->harga = $data['harga'];
        return $this;
    }
}