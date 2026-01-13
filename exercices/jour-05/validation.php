<?php

function isInstock ($stock) {
    return $stock > 0;
}

function isOnSale ($discount) {
    return $discount > 0;
}

$dateAdded = "2025-01-15";
function isNew ($dateAdded) {
    $daysSince = (time() - strtotime($dateAdded)) / 86400;
    if ($daysSince < 30) { 
        return true;
    } else {
        return false;
    }
    
}

function canOrder ($stock, $quantity) {
    return $stock>= $quantity;
}


echo "isInStock tests:<br>";
echo isInStock(5) ? "true" : "false"; echo "<br>"; // true
echo isInStock(0) ? "true" : "false"; echo "<br>"; // false

echo "<br>isOnSale tests:<br>";
echo isOnSale(10) ? "true" : "false"; echo "<br>"; // true
echo isOnSale(0) ? "true" : "false"; echo "<br>";  // false

echo "<br>isNew tests:<br>";
$date1 = date('Y-m-d', strtotime('-10 days'));
$date2 = date('Y-m-d', strtotime('-40 days'));
echo "Produit ajouté il y a 10 jours : "; 
echo isNew($date1) ? "true" : "false"; echo "<br>"; // true
echo "Produit ajouté il y a 40 jours : "; 
echo isNew($date2) ? "true" : "false"; echo "<br>"; // false

echo "<br>canOrder tests:<br>";
echo canOrder(5, 3) ? "true" : "false"; echo "<br>"; // true
echo canOrder(2, 5) ? "true" : "false"; echo "<br>"; // false
?>