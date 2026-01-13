<?php

// Crée un tableau $products contenant 5 produits
$products = [
    [
        "Name" => "Jean", 
        "Price" => "35", 
        "Stock" => "15"
    ],
    [   "Name" => "Pull",
        "Price" => "60",
        "Stock" => "20"
    ],
    [   "Name" => "T-shirt",
        "Price" => "25",
        "Stock" => "40"
    ],
    [   "Name" => "Sweet shirt",
        "Price" => "75",
        "Stock" => "30"
    ],
    [   "Name" => "Shoes",
        "Price" => "120",
        "Stock" => "140"
        ]

];

// Afficher le nom du 3ème produit
echo " Troisième article : " . $products[2]["Name"] . "<br>";

// Afficher le prix du 1er produit
echo " Premier article : " . $products[0]["Price"]  . "€". "<br>"; 

// Afficher le stock du dernier produit
echo " Dernier article : " . $products[4]["Stock"]  . " restant". "<br>"; 
echo "Dernier article : " . $products[count($products) - 1]["Stock"] ." restant". "<br>";

// Modifier le stock du 2ème produit (+10 unités)
$products[1]["Stock"] +=10;

echo "Nouveau stock du 2ème produit : " . $products[1]["Stock"];
?>
