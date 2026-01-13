<?php 

function greet () {
    echo "Bievenue sur la boutique ! <br>";
}

function greetClient ($name) {
    echo "Bonjour $name ! <br>";
}

greet();
greet ();
greet ();

greetClient ("Tom");
greetClient ("Nils");
greetClient ("Justin");


?>