<?php
// Définition de la classe Product
class Product {
    public string $name;
    public float $price;
    public int $stock;

    public function __construct(string $name, float $price, int $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function __toString(): string {
        return "Produit: $this->name, Prix: €$this->price, Stock: $this->stock";
    }

    public function getTotalValue(): float {
        return $this->price * $this->stock;
    }
}

// Création de 5 objets Product
$product1 = new Product("Ordinateur", 1200.50, 5);
$product2 = new Product("Clavier", 50.00, 20);
$product3 = new Product("Souris", 25.75, 30);
$product4 = new Product("Écran", 300.00, 10);
$product5 = new Product("Casque", 80.00, 15);

// Stockage dans un tableau
$catalogue = [$product1, $product2, $product3, $product4, $product5];

// Parcours et affichage
$totalStock = 0;
$totalValue = 0;

foreach ($catalogue as $product) {
    echo $product . PHP_EOL; // utilise __toString
    $totalStock += $product->stock;
    $totalValue += $product->getTotalValue();
}

// Affichage des totaux
echo "Total du stock: $totalStock" . PHP_EOL;
echo "Valeur totale du catalogue: €$totalValue" . PHP_EOL;
?>
