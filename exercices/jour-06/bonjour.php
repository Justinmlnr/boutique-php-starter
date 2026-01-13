
<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'visiteur';
$age = isset($_GET['age']) ? $_GET['age'] : null;

if ($age) {
echo "Bonjour $name, vous avez $age ans !";
} else {
    echo "Bonjour $name";
}
?>

