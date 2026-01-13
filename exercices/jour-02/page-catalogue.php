<?php

$product = [
    [
        "name" => "Jeans",
        "price" => "99.99",
        "stock" => "300"
    ],
    [
        "name" => "Pull",
        "price" => "45.99",
        "stock" => "200"
    ],
    [
        "name" => "Shoes",
        "price" => "150.99",
        "stock" => "250"
    ],
    [
        "name" => "T-shirt",
        "price" => "30.99",
        "stock" => "500"
    ],
    [
        "name" => "Sweat-shirt",
        "price" => "80.99",
        "stock" => "350"
    ],
    [
        "name" => "Jacket",
        "price" => "120.99",
        "stock" => "150"
    ],

];
?>

<div>
    <h2><?= $product[0]["name"] ?></h2>
    <p class="price"><?= $product[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $product[0]["stock"] ?></p>
</div>

<div>
    <h2><?= $product[1]["name"] ?></h2>
    <p class="price"><?= $product[1]["price"] ?> €</p>
    <p class="stock">Stock : <?= $product[1]["stock"] ?></p>
</div>

<div>
    <h2><?= $product[2]["name"] ?></h2>
    <p class="price"><?= $product[2]["price"] ?> €</p>
    <p class="stock">Stock : <?= $product[2]["stock"] ?></p>
</div>

<div>
    <h2><?= $product[3]["name"] ?></h2>
    <p class="price"><?= $product[3]["price"] ?> €</p>
    <p class="stock">Stock : <?= $product[3]["stock"] ?></p>
</div>

<div>
    <h2><?= $product[4]["name"] ?></h2>
    <p class="price"><?= $product[4]["price"] ?> €</p>
    <p class="stock">Stock : <?= $product[4]["stock"] ?></p>
</div>

<div>
    <h2><?= $product[5]["name"] ?></h2>
    <p class="price"><?= $product[5]["price"] ?> €</p>
    <p class="stock">Stock : <?= $product[5]["stock"] ?></p>
</div>