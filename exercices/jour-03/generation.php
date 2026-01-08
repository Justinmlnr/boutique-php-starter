<?php

$products = [];

for ( $i = 1; $i <= 10; $i ++) {
    $products[] = [
        "name" => "Produit $i",
        "price" => rand(10,100), // chiffre aléatoire entre 10 et 100
        "stock" => rand(0,50) // chiffre aléatoire entre 0 et 50
    ];

}

 /* var_dump($products); */

 echo "<h2>Liste Produit</h2>";
 echo "<ul>";
 foreach ( $products as $product) {
    echo "<li>";
    echo "<strong>" . $product["name"] . "  : " . "</strong>";
    echo "Prix :" . $product ["price"] . "€ ";
    echo "Stock : " . $product["stock"];
 }
 echo "</ul>";

?>
