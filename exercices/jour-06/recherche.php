<?php

$products = [
    ["name" => "T-shirt noir"],
    ["name" => "T-shirt blanc"],
    ["name" => "Jean bleu"],
    ["name" => "Jean noir"],
    ["name" => "Pull rouge"],
    ["name" => "Pull noir"],
    ["name" => "Veste en cuir"],
    ["name" => "Veste en jean"],
    ["name" => "Chaussures blanches"],
    ["name" => "Casquette sportive"]
];

$search = $_GET["search"] ?? "";
$results = [];

if ($search !== "") {

    foreach ($products as $product) {
        if (stripos($product["name"], $search) !== false) {
            $results[] = $product["name"];
        }
    }
}

?>

<form method="GET" action="recherche.php">
    <input type="text" name="search" placeholder="Rechercher un produit..."
        value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Rechercher</button>
</form>

<?php

if ($search === "") {
    echo "Tapez un mot pour commencer la recherche.";
} elseif (empty($results)) {
    echo "Aucun résultat";
} else {
    foreach ($results as $r) {
        echo htmlspecialchars($r) . "<br>";
    }
}

?>