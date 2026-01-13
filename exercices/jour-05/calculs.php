<?php

function calculateVAT($priceExcludingTax, $rate)
{
    return $priceExcludingTax * ($rate / 100);
}
function calculateIncludingTax($priceExcludingTax, $rate)
{
    return $priceExcludingTax + calculateVAT($priceExcludingTax, $rate);
}

function calculateDiscount($price, $percentage)
{
    return $price - ($price * ($percentage / 100));
}

$priceHT =  100;
$tvaRate = 20;
$discountRate = 10;

$vat = calculateVAT($priceHT, $tvaRate);
$priceTTC = calculateIncludingTax($priceHT, $tvaRate);
$priceAfterDiscount = calculateDiscount($priceTTC, $vat);

echo "Price HT : $priceHT €<br>";
echo "TVA (20%) : $vat € <br>";
echo "Price TTC : $priceTTC €<br>";
echo "Remise (10%): ($priceTTC - $priceAfterDiscount) €<br>";
echo "Prix final : $priceAfterDiscount €<br>";

?>