<?php

$products = [
   1 => ["name" => "T-shirt","price"=> "24.99"],
   2 => ["name"=> "Jean","price"=> "80"],
   3 => ["name"=> "Ceinture","price"=> "59.99"],
   4 => ["name"=> "Pull","price"=> "60.99"],
   5 => ["name"=> "Veste","price"=> "70.99"],
];

$id = $_GET["id"] ?? null;

if ($id && isset($products[$id])) {
    $product = $products[$id];
    echo "Produit : " . $product["name"] . "<br>";
    echo "Prix : " . $product["price"] . " €";
} else {
    echo "Produit non trouvé";
}

?>