<?php

$stock = 25;
// Le produit est-il actif ?
$active = true;
$promoEndDate = ("2027-12-31");

// Vérifie si le produit est disponible
if ($stock > 0 && $active) {
    echo "Produit disponible";
} else {
    echo "Produit indisponible";
}

echo "<br>";

// Vérifie si la promo est encore valable
if ($promoEndDate > date("Y-m-d")) {
    echo "En promo";
} else {
    echo "promo terminé";
}

?>