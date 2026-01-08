<?php

$products = [
    [
        "name" => "T-shirt",
        "price" => 19.99,
        "stock" => 15,
        "category" => "vêtements"
    ],
    [
        "name" => "Jeans",
        "price" => 59.99,
        "stock" => 8,
        "category" => "vêtements"
    ],
    [
        "name" => "Chaussures",
        "price" => 89.99,
        "stock" => 0,
        "category" => "chaussures"
    ],
    [
        "name" => "Casquette",
        "price" => 14.99,
        "stock" => 20,
        "category" => "accessoires"
    ],
    [
        "name" => "Veste",
        "price" => 40.99,
        "stock" => 3,
        "category" => "vêtements"
    ],
    [
        "name" => "Sac à dos",
        "price" => 49.99,
        "stock" => 12,
        "category" => "accessoires"
    ],
    [
        "name" => "Montre",
        "price" => 199,
        "stock" => 12,
        "category" => "accessoires"
    ]
];

$totalProducts = count($products);
$foundProducts = 0;

foreach ($products as $product) {
    if ($product["stock"] > 0 && $product["price"] < 50) {
        echo $product["name"] . "-" . $product["price"] . "<br>";
        $foundProducts++;
    }

}

echo "<br> $foundProducts produit trouvés sur $totalProducts";


?>