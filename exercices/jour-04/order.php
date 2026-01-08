<?php

$status = "canceled";

switch ($status) {
    case "standby":
        echo '<span style="color: orange">en attente</span>';
        break;

    case "validated":
        echo '<span style="color: blue">validée</span>';
        break;

    case "shipped":
        echo '<span style="color: purple">envoyer</span>';
        break;

    case "delivered":
        echo '<span style="color: green">livrée</span>';
        break;

    case "canceled":
        echo '<span style="color: red">annulée</span>';
        break;

    default:
        echo '<span style="color: black">Statut inconnu</span>';
}

echo "<br>";
echo "<br>";

echo match ($status) {
    "standby" => '<span style="color: orange"> en attente</span>',
    "validated" => '<span style="color: blue"> envoyer</span>',
    "shipped" => '<span style="color: purple"> expédiée</span>',
    "delivered" => '<span style="color: green"> livrée</span>',
    "canceled" => '<span style="color: red"> annulée</span>',
    "default" => '<span style="color: black">Statut inconnu</span>',
};

?>