<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// Récupérer tous les produits
$stmt = $pdo->query("SELECT * FROM products"); // nom correct de la table
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>
    <h1>Liste des produits</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?= htmlspecialchars($product['name']) ?> - 
                <?= htmlspecialchars($product['price']) ?> € - 
                Stock : <?= htmlspecialchars($product['stock']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
