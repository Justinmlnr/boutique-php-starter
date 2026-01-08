<?php

$clothes = [
    "T-shirt",
    "Jean",
    "Pull"
];

$accessories = [
    "Ceinture",
    "Montre",
    "Lunettes"
];

$catalogue = array_merge ($clothes, $accessories);
array_unshift ($catalogue, "chaussette");
//Affiche le nombre total de produits
echo "Nombre total de produits : " . count($catalogue);

echo "<br>";
print_r($catalogue);
?>