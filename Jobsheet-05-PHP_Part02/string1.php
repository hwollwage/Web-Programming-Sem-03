<?php
    $lorem = "Lorem ipsum dolor sit amet consectetur, 
                adipisicing elit. Veritatis, modi. Explicabo laborum,
                 fuga quidem non porro, temporibus molestiae fugiat
                 , sint cum illo eligendi voluptates similique
                  reiciendis odit ratione reprehenderit nam.";
    
    echo "<p>{$lorem}</p>";
    echo "panjang karakter : " . strlen($lorem) . "<br>";
    echo "panjang kata : " . str_word_count($lorem) . "<br>";
    echo "<p>" . strtoupper($lorem) . "</p>";
    echo "<p>" . strtolower($lorem) . "</p>";
?>