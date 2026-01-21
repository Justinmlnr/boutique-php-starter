<?php

$products = [
    ["name" => "T-shirt noir", "prix" => 15, "stock" => 10],
    ["name" => "T-shirt blanc", "prix" => 15, "stock" => 8],
    ["name" => "Jean bleu", "prix" => 40, "stock" => 5],
    ["name" => "Jean noir", "prix" => 40, "stock" => 4],
    ["name" => "Pull rouge", "prix" => 30, "stock" => 6],
    ["name" => "Pull noir", "prix" => 30, "stock" => 7],
    ["name" => "Veste en cuir", "prix" => 120, "stock" => 2],
    ["name" => "Veste en jean", "prix" => 80, "stock" => 3],
    ["name" => "Chaussures blanches", "prix" => 60, "stock" => 5],
    ["name" => "Casquette sportive", "prix" => 20, "stock" => 12]
];

$search = $_GET["search"] ?? "";
$minPrix = $_GET["minPrix"] ?? "";
$maxPrix = $_GET["maxPrix"] ?? "";
$minStock = $_GET["minStock"] ?? "";
$maxStock = $_GET["maxStock"] ?? "";

$results = [];

if ($search !== "" || $minPrix !== "" || $maxPrix !== "" || $minStock !== "" || $maxStock !== "") {
    foreach ($products as $product) {
        if (
            (stripos($product["name"], $search) !== false || $search === "") &&
            ($minPrix === "" || $product["prix"] >= $minPrix) &&
            ($maxPrix === "" || $product["prix"] <= $maxPrix) &&
            ($minStock === "" || $product["stock"] >= $minStock) &&
            ($maxStock === "" || $product["stock"] <= $maxStock)
        ) {
            $results[] = $product;
        }
    }
}
?>

<form method="GET" action="recherche.php">
    <input type="text" name="search" placeholder="Rechercher un produit..." value="<?= htmlspecialchars($search) ?>">
    <input type="number" name="minPrix" placeholder="Prix min" value="<?= htmlspecialchars($minPrix) ?>">
    <input type="number" name="maxPrix" placeholder="Prix max" value="<?= htmlspecialchars($maxPrix) ?>">
    <input type="number" name="minStock" placeholder="Stock min" value="<?= htmlspecialchars($minStock) ?>">
    <input type="number" name="maxStock" placeholder="Stock max" value="<?= htmlspecialchars($maxStock) ?>">
    <button type="submit">Rechercher</button>
</form>

<?php
if ($search === "" && $minPrix === "" && $maxPrix === "" && $minStock === "" && $maxStock === "") {
    echo "Tapez un mot pour commencer la recherche.";
} elseif (empty($results)) {
    echo "Aucun résultat";
} else {
    foreach ($results as $r) {
        echo htmlspecialchars($r["name"]) . " - Prix: " . $r["prix"] . "€ - Stock: " . $r["stock"] . "<br>";
    }
}

?>