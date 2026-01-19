<?php

class Category
{
    private int $id;
    private string $name;
    private string $description;

    public function __construct(int $id, string $name, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function afficherCat (): void
    {
        $infos = "ID : " . $this->getId() . "<br>";
        $infos .= "Name cat : " . $this ->getName() . "<br>";
        $infos .= "description : " . $this -> getDescription() . "<br>";

        echo $infos;
    }
}

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private string $description;
    private Category $category;

    public function __construct(int $id, string $name, float $price, string $description, Category $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getCategory(): Category
    {
        return $this->category;
    }
    public function afficher(): void
    {
        $info = "Produit : " . $this->getName() . " (" . $this->getPrice() . "€)<br>";
        $info .= "Description : " . $this->getDescription() . "<br>";
        $info .= "Catégorie : " . $this->getCategory()->getName() . "<br>";
        $info .= str_repeat("-", 30) . "<br>";

        echo $info;
    }
}
$cat1 = new Category(1, "Acessoire", "Article acessoire");
$cat2 = new Category(2, "Vêtement", "Tous types de vêtements");
$cat3 = new Category(3, "Costume", "Costumes élégants");

$prod1 = new Product(1, "Ceinture", 15.99, "Ceinture luxe", $cat1);
$prod2 = new Product(2, "Bonnet", 10.50, "Bonnet élégant", $cat1);
$prod3 = new Product(3, "Pull", 39.99, "Pull en laine", $cat2);
$prod4 = new Product(4, "Pantalon", 50, "pantalon de qualité", $cat2);
$prod5 = new Product(5, "Costume noir", 120.99, "Costume de luxe noir", $cat3);

$produits = [$prod1, $prod2, $prod3, $prod4, $prod5];


foreach ($produits as $prod) {
    $prod ->getCategory()->afficherCat();
    $prod->afficher();
}
