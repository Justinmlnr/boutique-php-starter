<?php
require_once("CategoryProduct.php");
class CartItem {
        public function __construct(
        private Product $product,
        private int $quantity = 1
    ) {}
    
    public function getProduct(): Product
    {
        return $this->product;
    }
    
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    
    public function setQuantity(int $quantity): void
    {
        $this->quantity = max(1, $quantity);
    }
    
    public function getTotal(): float
    {
        return $this->product->getPrice() * $this->quantity;
    }

    public function incremente(int $amount = 1): void
    {
         $this->quantity += $amount;
    }
    
    public function decremente(int $amount = 1): void
    {
         $this->quantity = max(1, $this->quantity - $amount);
    }
     public function afficher(): void
    {
        echo "Produit : {$this->product->getName()} | Prix : {$this->product->getPrice()}€ | Quantité : {$this->quantity} | Total : {$this->getTotal()}€<br>";
    }
}

$cartItem = new CartItem($produits[1], 4);
$cartItem->afficher();

$cartItem->incremente();
$cartItem->afficher();

$cartItem->decremente();
$cartItem->afficher();

$cartItem->decremente(10);
$cartItem->afficher();

echo "<br>";