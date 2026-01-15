<?php
// ----- DONNÉES PRODUITS -----

$products = [
    [
        "name" => "Jeans",
        "price" => 34.99,
        "stock" => 0,
        "image" => 0 
    ],
    [
        "name" => "Pull",
        "price" => 129,
        "stock" => 5,
        "image" => 0
    ],
    [
        "name" => "Sweat",
        "price" => 19.9,
        "stock" => 12,
        "image" => 0
    ],
    [
        "name" => "Ceinture",
        "price" => 59.5,
        "stock" => 2,
        "image" => 0
    ],
    [
        "name" => "Chausette",
        "price" => 44.5,
        "stock" => 0,
        "image" => 0
    ],
    [
        "name" => "Veste",
        "price" => 79,
        "stock" => 8,
        "image" => 0
    ],
    [
        "name" => "Casquette",
        "price" => 24.9,
        "stock" => 3,
        "image" => 0
    ],
    [
        "name" => "Écharpe",
        "price" => 39.99,
        "stock" => 0,
        "image" => 0
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catalogue produits</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f1f5f9;
            padding: 30px;
        }

        h1{
            margin-bottom: 20px;
        }

        .grid{
            display:grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap:20px;
        }

        .card{
            background:white;
            border-radius:12px;
            padding:15px;
            box-shadow:0 4px 12px rgba(0,0,0,.08);
        }

        .card img{
            width:100%;
            border-radius:10px;
            margin-bottom:10px;
        }

        .name{
            font-size:18px;
            font-weight:bold;
            margin-bottom:5px;
        }

        .price{
            color:#2563eb;
            font-weight:bold;
            margin-bottom:8px;
        }

        .in{
            color:green;
            font-weight:bold;
        }

        .out{
            color:red;
            font-weight:bold;
        }
    </style>
</head>

<body>

<h1>Catalogue dynamique</h1>

<div class="grid">

<?php foreach($products as $p): ?>
    <div class="card">

        <img src="<?= $p["image"] ?>" alt="<?= $p["name"] ?>">

        <div class="name"><?= $p["name"] ?></div>

        <!-- prix formaté 2 décimales -->
        <div class="price">
            <?= number_format($p["price"], 2, ',', ' ') ?> €
        </div>

        <!-- condition stock -->
        <?php if($p["stock"] > 0): ?>
            <div class="in">✓ En stock (<?= $p["stock"] ?>)</div>
        <?php else: ?>
            <div class="out">✗ Rupture</div>
        <?php endif; ?>

    </div>
<?php endforeach; ?>

</div>

</body>
</html>
