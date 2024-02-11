<?php
    // 1. Indexed Array
    $cars = array("Pajero", "Fortuner", "Palisade");
    echo $cars[0] . "<br>";
    echo $cars[1] . "<br>";
    echo $cars[2] . "<br>";

    // create indexed array by mentioning its elements first
    $buah[0] = "Apel";
    $buah[1] = "Belimbing";
    $buah[2] = "Ceri";
    echo $buah[0] . "<br>";
    echo $buah[1] . "<br>";
    echo $buah[2] . "<br>";

    // 2. Associative Array
    $age = array(
        "Andi" => "20", 
        "Budi" => "21", 
        "Caca" => "22"
    );
    echo $age['Andi'] . "<br>";
    echo $age['Budi'] . "<br>";
    echo $age['Caca'] . "<br>";
    
    // create associative array by mentioning its elements first
    $skor['Andi'] = 83;
    $skor['Budi'] = 85;
    $skor['Caca'] = 87;
    echo $skor['Andi'] . "<br>";
    echo $skor['Budi'] . "<br>";
    echo $skor['Caca'] . "<br>";

    // get keys using array_keys($skor) = array("Andi", "Banu", "Caca");
    print array_keys($skor)[0] . "<br>";
    print array_keys($skor)[1] . "<br>";
    print array_keys($skor)[2] . "<br>";

    // 3. Multi Dimensional Array (array dalam array)
    $i = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9),
    );
    echo $i[0][0];  // 1
    echo $i[0][1];  // 2
    echo $i[2][2];  // 9
    echo $i[1][1];  // 5
?>