<?php

function formatPrice($amount = 20, $currency = "€", $decimals = 2) {
    $formatted = number_format($amount, $decimals, '.', '');
    return $formatted . " " . $currency;

}

echo formatPrice(99.999) . "<br>";
echo formatPrice(99.999, "$") ."<br>";
echo formatPrice(99.999,"€", 0) ."<br>";
echo formatPrice() . "<br>";
?>


<!-- echo number_format($amount, $decimals, '.', '') . " " . $currency; -->