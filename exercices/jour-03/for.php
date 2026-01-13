<?php
// Affiche les nombres de 1 à 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<br>";

// Affiche les nombres pairs de 2 à 20
for ($i = 2; $i <= 20; $i = $i + 2){
    echo $i . "<br>";
} 

echo "<br>";

// Affiche un compte à rebours de 10 à 0
for ( $i = 10; $i >= 0; $i--){
    echo $i . "<br>";
}

echo "<br>";

// Crée une table de multiplication (de 1 à 10) pour le nombre 7
for ($i = 1; $i <= 10; $i++) {
    echo (7 * $i) . "<br>"; 
}
?>