<?php
    // 1. while loop
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // 2. do...while loop
    $y = 1;
    do {
        echo "The number is: $y <br>";
        $y++;
    } while ($y <= 5);

    // 3. for loop
    for ($z = 0; $z <= 10; $z++) {
        echo "The number is: $z <br>";
    }

    // 4. foreach loop
    // foreach in indexed array
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    // foreach in associative array
    $age = array("Andi"=>"25", "Budi"=>"20");
    foreach($age as $key => $value) {
        echo "$key = $value<br>";
    }
?>
