<?php
    // 1. basic function
    function tes(){
        echo "Halo Dunia<br>";
    }
    tes();

    // 2. dynamic function: function argument
    function sayHello($nama, $usia){
        echo "Hello $nama, usiamu $usia th. <br>";
    }
    sayHello("Andi", 21);
    sayHello("Budi", 22);
    sayHello(120, "Caca");

    // 3. argument type declaration: better definisikan tipe data dari args
    function sayHi(string $nama, int $usia){
        echo "Hi $nama, usiamu $usia th. <br>";
    }
    sayHi("Ali", 23);
    sayHi("Danu", 21);
    sayHi("Euis", 21);

    // 4. arg default value
    function sayHai(string $nama = "Alan", int $usia = 20){
        echo "Hi $nama, usiamu $usia th. <br>";
    }
    sayHai("Cici");
    sayHai();

    // 5. Return function: func yg memiliki return / value
    function kalikan(int $x = 1, int $y = 1){
        return $x * $y;
    }
    echo "<p>" . kalikan(2, 3) . "</p>";

    // 6. return type declaration
    function tambah(int $x = 1, int $y = 1) : int {
        return $x + $y;
    }
    echo tambah(2, 3);
?>