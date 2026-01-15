<?php



$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev",
    "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// Récupérer tous les produits
$stmt = $pdo->query("SELECT * FROM products"); // nom correct de la table
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "add") {
    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock, category) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["description"], $_POST["price"], $_POST["stock"], $_POST["category"]]);
    header("Location: admin-produits.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "update") {
    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock, category) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["description"], $_POST["price"], $_POST["stock"], $_POST["category"]]);
    header("Location: admin-produits.php");
    exit;
}

if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
}
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
                <button><a href="?edit=<?= $product["id"] ?>">Modifier</a></button>
                <button><a href="?delete=<?= $product["id"] ?>">Supprimer</a></button>
            </li>
        <?php endforeach; ?>
    </ul>
    <form method="POST" action="">
        <input type="hidden" name="action" value="add">

        <label>Username</label>
        <input type="text" name="name">
        <div style="color:red"><?= $errors["name"] ?></div>

        <label>description</label>
        <input type="text" name="description">
        <div style="color:red"><?= $errors["description"] ?></div>

        <label>price</label>
        <input type="float" name="price">
        <div style="color:red"><?= $errors["price"] ?></div>

        <label>stock</label>
        <input type="number" name="stock">
        <div style="color:red"><?= $errors["stock"] ?></div>

        <label>category</label>
        <input type="text" name="category">
        <div style="color:red"><?= $errors["category"] ?></div>

        <button type="submit">ajouter</button>


    </form>
</body>

<pre>
    <?= var_dump($_POST) ?>
</pre>

</html>

<?php

?>