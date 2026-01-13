<?php

$products = [];

for ( $i = 1; $i <= 10; $i ++) {
    $products[] = [
        "name" => "Produit" . "$i",
        "price" => rand(10,150), // chiffre aléatoire entre 10 et 100
        "stock" => rand(0,5) // chiffre aléatoire entre 0 et 50
    ];

}

$products[2]["stock"] = 0;
$products[2]["price"] = 1100;
$products[8]["stock"] = 0;


// foreach ($products as $product) {

//     if ($product["stock"] === 0) {
//         continue;
//     } if ($product["price"] > 100) {
//         break;
//     } 
// }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($products as $product): ?>
        <?php if ($product["stock"] === 0): continue; ?>
        <?php elseif ($product["price"] > 100): break; ?>
        <?php elseif ($product["stock"] > 0 && $product["price"] < 100): ?>
            <p><?= $product["name"] ?></p>
            <p><?= $product["price"] ?></p>
            <p><?= $product["stock"] ?></p>
        <?php endif; ?>

    <?php endforeach; ?>
</body>
</html>  

<?php

// Création d'un tableau de 10 produits
$produits = [];

// Remplissage du tableau avec une boucle for
for ($i = 1; $i <= 10; $i++) {
    $produits[] = [
        "nom" => "Produit $i",
        "prix" => rand(10, 150),   // prix aléatoire entre 10 et 150
        "stock" => rand(0, 20)     // stock aléatoire entre 0 et 20
    ];
}

// Parcours du tableau avec une boucle for
for ($i = 0; $i < count($produits); $i++) {

    // continue → ignorer produits sans stock
    if ($produits[$i]["stock"] == 0) {
        continue;
    }

    // break → arrêter si prix > 100€
    if ($produits[$i]["prix"] > 100) {
        break;
    }

    // Afficher seulement produits en stock et < 100€
    echo $produits[$i]["nom"]
        . " - Prix : " . $produits[$i]["prix"] . "€"
        . " - Stock : " . $produits[$i]["stock"]
        . "<br>";
}

?>