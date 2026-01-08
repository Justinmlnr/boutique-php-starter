
<?php
// pour voir les erreurs sur le navigateur, enlever quand mis en prod
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Variables du produit
$name = "Pantalon"; // string texte
$price = "28.99"; // float nombre décimal
$stock = 42; // int nombre entier
$OnSale = true; // bool vrai/faux

// Affichage des variables et de leur type
var_dump ($name);
var_dump($price);
var_dump($stock);
var_dump($OnSale);

var_dump("28.99"); # string
var_dump(28.99); # float
var_dump("28.99" + 10); # float

// Affiche ensuite une phrase : "Le produit X coûte Y€"
echo "<br>";
echo "le produit $name côute $price €";

?>