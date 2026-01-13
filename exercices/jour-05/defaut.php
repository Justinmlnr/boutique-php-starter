<?php

function formatPrice($amount, $currency = "€", $decimals = 2) {
    $formatted = number_format($amount, $decimals, '.', '');
    return $formatted . " " . $currency;

}

echo formatPrice(99.999) . "<br>";
echo formatPrice(99.999, "$") ."<br>";
echo formatPrice(99.999,"€", 0) ."<br>";
?>


echo number_format($amount, $decimals, '.', '') . " " . $currency;