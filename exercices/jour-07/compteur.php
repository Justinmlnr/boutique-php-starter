<?php
session_start();

if (isset($_GET['reset'])) {
    $_SESSION['visits'] = 0;
    echo "Vous avez visité cette page 0 fois<br>";
    echo '<a href="?">Revenir à la page</a>';
    exit;
}

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}


$_SESSION['visits']++;

echo "Vous avez visité cette page " . $_SESSION['visits'] . " fois<br>";
echo '<a href="?reset=1">Réinitialiser</a>';

?>