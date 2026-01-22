<?php

require 'ProductRepository.php';

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8",
    "dev",
    "dev",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

$productRepo = new ProductRepository($pdo);

echo "<pre>";

// crée

$product = new Product(
    name: "T-shirt",
    price: 15.99,
    stock: 50
);

$productRepo->save($product);
echo "Produit créé\n";


// lire
$products = $productRepo->findAll();
$lastProduct = end($products);

echo "Dernier produit :\n";
var_dump($lastProduct);


// update
$lastProduct->setPrice(19.99);
$productRepo->update($lastProduct);

$updated = $productRepo->find($lastProduct->getId());

echo "Produit après modif :\n";
var_dump($updated);


// delete
$productRepo->delete($lastProduct->getId());
echo "Produit supp\n";





$deleted = $productRepo->find($lastProduct->getId());
var_dump($deleted);

echo "</pre>";