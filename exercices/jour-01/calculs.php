<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$priceExcludingTax = 100;
$vat = 20;
$quantity = 3;

// calcul tva
$vatAmount = $priceExcludingTax * ($vat/100);

// calcul prix ttc unitaire
$priceExcludingTax = $priceExcludingTax + $vatAmount;

// calcul total pour quantité commandée 
$total = $priceExcludingTax * $quantity;

echo "Montant de la TVA : $vatAmount € <br>";
echo " Prix TTC unitaire : $priceExcludingTax € <br>";
echo " Total pour $quantity articles : $total €";

?>