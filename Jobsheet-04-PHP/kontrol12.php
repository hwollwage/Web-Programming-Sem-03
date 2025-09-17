<?php 
    $productPrice = 120000;
    $discount = 0;
    
    if($productPrice > 100000) {
        $discount = 0.20 * $productPrice;
    }

    $sumPrice = $productPrice - $discount;

    echo "product price : $productPrice <br>";
    echo "discount : $discount<br>";
    echo "final price : $sumPrice<br>";
?>
