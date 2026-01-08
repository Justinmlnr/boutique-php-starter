<?php

$products = [
    0 => [ # 0 Array
        "name" => "Jeans",
        "price" => "99.99",
        "stock" => "300"
    ],
    1 => [
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

// Version Full PHP
echo "<ul>";
foreach ($products as $product) {
    foreach ($product as $key => $value) {
        echo "<li>" . $key .': <strong>' . $value . "</strong></li><br>"; 
    }
    echo "NOUVEAU BLOCK ------------------------------ $key";
}
echo "</ul>";


foreach ($products as $product): ?>
    
    <article>
        <h3><?= $product['name'] ?></h3>
        <p class="prix"><?= $product['price'] ?> €</p>
        <p class="stock">Stock : <?= $product['stock'] ?></p>
    </article>

    
<?php endforeach; ?>


<!-- Version HTML + PHP -->
<ul>
<?php 
foreach ($products as $product) :
    foreach ($product as $key => $value) : ?>
        <li><?= $key ?>: <strong><?= $value ?></strong></li><br>
<?php endforeach; ?>
    NOUVEAU BLOCK ------------------------------ <?= $key ?>
<?php endforeach; ?>
</ul>