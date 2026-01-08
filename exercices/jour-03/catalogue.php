<?php
$products = [
    [
        "name" => "T-shirt",
        "price" => 19.99,
        "stock" => 15,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Jeans",
        "price" => 59.99,
        "stock" => 8,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Chaussures",
        "price" => 89.99,
        "stock" => 0,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Casquette",
        "price" => 14.99,
        "stock" => 20,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Veste",
        "price" => 129.99,
        "stock" => 3,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Sac à dos",
        "price" => 49.99,
        "stock" => 12,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Montre",
        "price" => 199.00,
        "stock" => 0,
        "image" => "https://via.placeholder.com/150"
    ],
    [
        "name" => "Pull",
        "price" => 39.99,
        "stock" => 6,
        "image" => "https://via.placeholder.com/150"
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Catalogue produits</title>
    <style>
        .grille {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .produit {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        .produit img {
            max-width: 100%;
        }

        .rupture {
            color: red;
            font-weight: bold;
        }

        .en-stock {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Catalogue</h1>

    <div class="grille">
        <?php foreach ($products as $product): ?>
            <div class="produit">
                <img src="<?= $product["image"] ?>" alt="
            <?= $product["name"] ?>">
                <h3>
                    <?= $product["name"] ?>
                </h3>

                <p>
                    <?= number_format($product["price"], 2) ?> €
                </p>

                <p class="<?= $product["stock"] > 0 ? "en-stock" : "rupture" ?>">
                    <?= $product["stock"] > 0 ? "En stock" : "Rupture" ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>