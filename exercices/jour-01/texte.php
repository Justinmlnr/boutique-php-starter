<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$brand = "Nike";
$model = "Air Max";

// Avec interpolation 
echo "Chaussure $brand $model <br>";

// avec concaténation (.)
echo "Chaussures " . $brand . " " . $model . "<br>";

// avec sprintf() %s = string 
echo sprintf("Chaussure %s %s .", $brand, $model);