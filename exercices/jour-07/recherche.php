<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Formulaire GET avec un champ de recherche

$results= [];

// si le form est soumis
if (!empty($_GET["search"])) {
    $search= $_GET["search"];
    $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE");
    $stmt ->execute(["%" . $search ."%"]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
<h1>Recherche de produits</h1>

    <form method="GET">
        <input type="text" name="search" placeholder="Nom du produit" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
        <button type="submit">Rechercher</button>
    </form>

     <h2>Résultats :</h2>
    <?php if ($results) : ?>
        <ul>
            <?php foreach ($results as $p) : ?>
                <li><?= htmlspecialchars($p['name']) ?> — <?= htmlspecialchars($p['price']) ?> €</li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($_GET['search'])) : ?>
        <p>Aucun produit trouvé.</p>
    <?php endif; ?>