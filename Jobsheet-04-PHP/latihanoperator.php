<?php
    $seat = 45;
    $occupiedSeat = 28;
    $emptySeat = $seat - $occupiedSeat;
    $percentage = ($emptySeat / $seat) * 100; 

    echo "Total seat : $seat <br>";
    echo "Occupied seat : $occupiedSeat <br>";
    echo "Empty seat : $emptySeat <br>";
    echo "Empty seat percentage $percentage% <br>";
?>