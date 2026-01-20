<?php
require_once("CategoryProduct.php");
require_once("CartItem.php");
class Cart
{
    /** @var CartItem[] */
    private array $items = [];

    public function addProduct(Product $product, int $quantity = 1) //void
    {
        $id = $product->getId();

        if (isset($this->items[$id])) {
            // Produit déjà dans le panier → augmenter quantité
            $currentQuantity = $this->items[$id]->getQuantity();
            $this->items[$id]->setQuantity($currentQuantity + $quantity);
        } else {
            // Nouveau produit
            $this->items[$id] = new CartItem($product, $quantity);
        }
        return $this;
    }

    public function removeProduct(int $productId) // void
    {
        unset($this->items[$productId]);
        
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function clear(): void
    {
        $this->items = [];
    }

    public function update(int $productId, int $quantity): void
    {
        if (isset($this->items[$productId])) {
            if ($quantity > 0) {
                $this->items[$productId]->setQuantity($quantity);
            } else {
                // Si la quantité est 0 ou moins, on supprime le produit
                $this->removeProduct($productId);
            }
        }
    }
    
}


$product1 = new Product(1, "Produit 1", 10.0, "produit", $cat1);
$product2 = new Product(2, "Produit 2", 20.0, "produitduit", $cat2);

// Création du panier
$cart = new Cart();

// Ajouter des produits
$cart->addProduct($product1, 2); // 2 x Produit 1
$cart->addProduct($product2, 1); // 1 x Produit 2

$cart->update(1, 5); // Maintenant 5 x Produit 1

$cart->removeProduct(2); // Supprime Produit 2

$cart->addProduct($product1)
     ->addProduct($product2, 3)
     ->removeProduct(1);
     
echo "Total du panier : " . $cart->getTotal() . "<br>";

echo "Nombre d'items différents : " . $cart->count() . "<br>";

$cart->clear();
echo "Nombre d'items après clear : " . $cart->count() . "<br>";

