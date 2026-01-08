<?php

$categorie = [
    "Vêtements",
    "Chaussures",
    "Accesoires",
    "Sport"
];

if (in_array("Chaussures", $categorie))
{
    echo "found";
}
else {
    echo "not found";
}

// retour a la ligne
echo "<br>";

if (in_array("Electronique", $categorie))
{
    echo "found";
}
else {
    echo "not found";
}

echo "<br>";

// rechercher index avec array_search
echo array_search("Sport", $categorie);
?>