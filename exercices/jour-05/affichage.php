<?php
// fonctions utilitaires

function displayBadge($product) {
    if ($product['new']) return '<span class="badge" style="background: blue; color:white; padding:3px 6px; border-radius:4px;">NOUVEAU</span>';
    if ($product['discount'] > 0) return '<span class="badge" style="background: red; color:white; padding:3px 6px; border-radius:4px;">PROMO -' . $product['discount'] . '%</span>';
    if ($product['stock'] < 5 && $product['stock'] > 0) return '<span class="badge" style="background: orange; color:white; padding:3px 6px; border-radius:4px;">DERNIERS</span>';
    return '';
}

function displayPrice($product) {
    $price = $product['price'];
    if ($product['discount'] > 0) {
        $discountedPrice = $price - ($price * $product['discount'] / 100);
        return '<span style="text-decoration: line-through;">' . number_format($price, 2) . ' €</span> ' .
               '<span style="color:red;font-weight:bold;">' . number_format($discountedPrice, 2) . ' €</span>';
    }
    return number_format($price, 2) . ' €';
}

function displayStock($product) {
    if ($product['stock'] <= 0) return '<span style="color:red">Rupture</span>';
    if ($product['stock'] < 5) return '<span style="color: orange;">Stock faible (' . $product['stock'] . ')</span>';
    return '<span style="color:green">En stock (' . $product['stock'] . ')</span>';
}

function displayButton($product) {
    if ($product['stock'] > 0) return '<button>Ajouter au panier</button>';
    return '<button disabled>Ajouter au panier</button>';
}

// produits
$products = [
    ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    ["name" => "Pull Laine", "price" => 64.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 3, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
];

// statistiques
$inStock = $onSale = $outOfStock = 0;
foreach ($products as $p) {
    if ($p['stock'] > 0) $inStock++; else $outOfStock++;
    if ($p['onSale']) $onSale++;
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .grille { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .produit { border: 1px solid #ddd; padding: 15px; text-align:center; }
        .produit img { max-width: 100%; }
        .badge { font-size: 0.8em; }
    </style>
</head>
<body>

<p>Nombre de produits en stock : <?= $inStock ?></p>
<p>Nombre de produits en promo : <?= $onSale ?></p>
<p>Nombre de produits en rupture : <?= $outOfStock ?></p>

<div class="grille">
    <?php foreach ($products as $product): ?>
        <div class="produit">
            <?= displayBadge($product) ?><br><br>
            <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>"><br><br>
            <strong><?= htmlspecialchars($product['name']) ?></strong><br><br>
            <?= displayPrice($product) ?><br><br>
            <?= displayStock($product) ?><br><br>
            <?= displayButton($product) ?>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
