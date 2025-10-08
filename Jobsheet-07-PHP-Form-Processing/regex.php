<?php
    $pattern = '/[a-z]/';
    $text = 'This is a Sample Text';
    if (preg_match($pattern, $text)) {
        echo "huruf kecil ditemukan";
    } else {
        echo "tidak ada huruf kecil";
    }

    echo "<br><br>";

    $pattern2 = '/[0-9]+/';
    $text2 = "there are no apples.";
    if (preg_match($pattern2, $text2, $matches)) {
        echo "Cocokan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }

    echo "<br><br>";

    $pattern3 = '/apple/';
    $replacement = 'banana';
    $text3 = 'I like apple pie';
    $new_text = preg_replace($pattern3, $replacement, $text3);
    echo $new_text;

    echo "<br><br>";    

    $pattern4 = '/go*d/';
    $text4 = 'god is good';
    if(preg_match($pattern4, $text4, $matches)) {
        echo "cocokan : " . $matches[0];
    }else {
        echo "tidak ada yang cocok";
    }

    echo "<br><br>";

    $pattern5 = '/go?d/';
    $text5 = 'god is good, gd is short for god';

    if (preg_match_all($pattern5, $text5, $matches)) {
        echo "Cocokan ditemukan:<br>";
        foreach ($matches[0] as $match) {
            echo $match . "<br>";
        }
    } else {
        echo "tidak ada yang cocok";
    }

    echo "<br><br>";

    $pattern6 = '/go{1,3}d/';
    $text6 = 'god good goood goooood';

    if (preg_match_all($pattern6, $text6, $matches)) {
        echo "Cocokan ditemukan:<br>";
        foreach ($matches[0] as $match) {
            echo $match . "<br>";
        }
    } else {
        echo "Tidak ada yang cocok!";
    }

?>
