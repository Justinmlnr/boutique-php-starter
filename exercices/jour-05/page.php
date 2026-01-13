<?php

require_once "helpers.php";


$products = [
    ["name" => "Jean", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    ["name" => "Pull", "price" => 64.99, "stock" => 10, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "T-shirt", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "Ceinture", "price" => 17.99, "stock" => 3, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    ["name" => "Montre", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
];
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .grille {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .produit {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        img {
            max-width: 100%;
        }
    </style>
</head>

<body>

    <h1>Produits</h1>

    <div class="grille">

        <?php foreach ($products as $product): ?>
            <div class="produit">

                <!-- badge -->
                <?= displayBadge($product) ?><br><br>

                <!-- image -->
                <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>"><br><br>

                <!-- nom -->
                <strong><?= htmlspecialchars($product['name']) ?></strong><br><br>

                <!-- prix -->
                <?= displayPrice($product) ?><br><br>

                <!-- stock -->
                <?= displayStock($product) ?><br><br>

                <!-- bouton -->
                <?= displayButton($product) ?>

            </div>
        <?php endforeach; ?>

    </div>

</body>

</html>