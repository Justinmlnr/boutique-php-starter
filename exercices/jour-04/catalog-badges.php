<?php

$products = [
    [
        "name" => "T-shirt",
        "price" => 29.99,
        "stock" => 3,
        "image" => "https://via.placeholder.com/150",
        "new" => true,
        "discount" => 0
    ],
    [
        "name" => "Jean",
        "price" => 89.99,
        "stock" => 0,
        "image" => "https://via.placeholder.com/150",
        "new" => false,
        "discount" => 20
    ],
    [
        "name" => "Casquette",
        "price" => 14.99,
        "stock" => 12,
        "image" => "https://via.placeholder.com/150",
        "new" => true,
        "discount" => 10
    ],
    [
        "name" => "Chaussures",
        "price" => 99.99,
        "stock" => 2,
        "image" => "https://via.placeholder.com/150",
        "new" => false,
        "discount" => 0
    ],
    [
        "name" => "Pull",
        "price" => 39.99,
        "stock" => 0,
        "image" => "https://via.placeholder.com/150",
        "new" => false,
        "discount" => 0
    ],
    [
        "name" => "Veste",
        "price" => 129.99,
        "stock" => 4,
        "image" => "https://via.placeholder.com/150",
        "new" => true,
        "discount" => 15
    ],
    [
        "name" => "Sac à dos",
        "price" => 49.99,
        "stock" => 10,
        "image" => "https://via.placeholder.com/150",
        "new" => false,
        "discount" => 0
    ],
    [
        "name" => "Montre",
        "price" => 199.99,
        "stock" => 1,
        "image" => "https://via.placeholder.com/150",
        "new" => true,
        "discount" => 30
    ]
];

// Statistiques
$inStock = 0;
$onSale = 0;
$outOfStock = 0;

foreach ($products as $product) {
    if ($product["stock"] > 0)
        $inStock++;
    if ($product["discount"] > 0)
        $onSale++;
    if ($product["stock"] === 0)
        $outOfStock++;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Catalogue avec badges</title>
</head>

<body>

    <h1>Catalogue</h1>

    <h2>Statistiques</h2>
    <ul>
        <li>Produits en stock :
            <?= $inStock ?>
        </li>
        <li>Produits en promo :
            <?= $onSale ?>
        </li>
        <li>Produits en rupture :
            <?= $outOfStock ?>
        </li>
    </ul>

    <hr>

    <?php foreach ($products as $product): ?>

        <div>
            <img src="<?= $product["image"] ?>" alt="
        <?= $product["name"] ?>">
            <h3>
                <?= $product["name"] ?>
            </h3>

            <!-- Badges -->
            <p>
                <?php if ($product["new"]): ?>
                    [NOUVEAU]
                <?php endif; ?>

                <?php if ($product["discount"] > 0): ?>
                    [PROMO -
                    <?= $product["discount"] ?>%]
                <?php endif; ?>

                <?php if ($product["stock"] < 5 && $product["stock"] > 0): ?>
                    [DERNIERS]
                <?php endif; ?>
            </p>

            <p>
                Prix :
                <?= number_format(
                    $product["price"] * (1 - $product["discount"] / 100),
                    2
                ) ?> €
            </p>

            <?php if ($product["stock"] === 0): ?>
                <p><strong>RUPTURE</strong></p>
            <?php else: ?>
                <p>En stock</p>
            <?php endif; ?>

            <button <?= $product["stock"] === 0 ? "disabled" : "" ?>>
                Ajouter au panier
            </button>

        </div>

        <hr>

    <?php endforeach; ?>

</body>

</html>