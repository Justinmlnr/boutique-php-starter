<?php

class Product
{
    public static int $nextId = 1;
    public int $id;
    public string $name;
    public string $description;
    public float $price;
    public int $stock;
    public string $category;

    public function __construct(string $name, string $description, float $price, int $stock, string $category)
    {
        $this->id = self::$nextId++;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->category = $category;
    }
    public function getPriceIncludingTax(float $vat): float
    {
        return $this->price * (1 + ($vat / 100));
    }
    public function isInStock(): bool
    {
        return ($this->stock > 0);
    }
    public function reduceStock(int $quantity): int
    {
        if ($this->stock - $quantity >= 0) {
            return $this->stock -= $quantity;
        } else {
            echo "erreur, pas assez de stock";
            return $this->stock;
        }
    }
    public function applyDiscount(float $percentage): float
    {
        return $this->price *= (1 - $percentage / 100);
    }
}



