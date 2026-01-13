<?php

$product = [
    "name" => "Jeans",
    "price" => 60.99,
    "stock" => 20,
    "onSale" => true,
];

?>

<div class="product <?= $product["stock"] > 0 ? "disponible" : "rupture" ?>">
    <h3>
        <?= $product["name"] ?>
        <?= $product["onSale"] ? "🔥 PROMO" : "" ?>
    </h3>

    <p>
        <?= $product["onSale"]
            ? "<del>{$product['price']} €</del> " . ($product["price"] * 0.8) . " €"
            : $product["price"] . " €"
            ?>
    </p>
</div>