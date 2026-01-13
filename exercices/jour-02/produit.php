<?php

// tableau associatif
// La flèche "=>" associe une clé à une valeur.
$product = [
    "name" => "Clavier",
    "description" => " Clavier pour travailler",
    "price" => 60,
    "stock" => 25,
    "category" => "Informatique",
    "brand" => "Asus"
];


// date du jour
$product ["dateAdded"] = date("d/m/y");

// modifier le prix remise 10%
$product["price"] = $product["price"] * 0.9 

?>

<div> 
     Name : <?php echo $product["name"]; ?><br>
     Description : <?php echo $product["description"]; ?><br>
     price : <?php echo $product["price"]; ?> <br>
     stock : <?php echo $product["stock"]; ?> <br>
     category : <?php echo $product["category"]; ?> <br>
     brand : <?php echo $product ["brand"]; ?> <br>
     Date : <?php echo $product["dateAdded"]; ?> <br>
</div>