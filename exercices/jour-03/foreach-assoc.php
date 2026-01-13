<?php

$info = [
    "name" => "Tom",
    "age" => 26,
    "city" => "Paris",
    "job" => "Trader"
];

echo "<ul>";
foreach ($info as $key => $value) {
    echo "<li><strong>" . $key . " : " . $value . "</strong></li><br>"; 
}
echo "</ul>";

?>