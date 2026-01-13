<?php

// Crée tableau avec 5 articles
$groceries = [
    "Pain",
    "Lait",
    "Fromage",
    "Oeuf",
    "Pomme"
];

// Afficher le premier article
echo " Premier article : $groceries[0] <br>";  

// Afficher le dernier article
echo "Dernier article : $groceries[4] <br>";
// Afficher le dernier article avec count()
echo "Dernier article : " . $groceries[count($groceries) - 1] . "<br>";

// Afficher le nombre total d'articles

// Ajouter 2 articles à la fin
$groceries[] = "Chocolat";
$groceries[] = "Coca";
echo "Nombre total d'articles : " . count($groceries) . "<br>";

// Supprimer le 3ème article (index 2)
unset($groceries[2]);



var_dump($groceries);

?>