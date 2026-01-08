<?php

$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

echo "== comparisons\n";
var_dump($a == $b);
var_dump($a == $c);
var_dump($a == $d);
var_dump($a == $e);

echo "\n=== comparisons\n";
var_dump($a === $b);
var_dump($a === $c);
var_dump($a === $d);
var_dump($a === $e);


?>