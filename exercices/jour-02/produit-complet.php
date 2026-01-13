<?php


$product = [
    "name" => "Clavier",
    "description" => "Clavier d'ordinateur pour travailler",
    "price" => 50,
    
    "images" => [
        "https://cours-informatique-gratuit.fr/wp-content/uploads/2014/05/clavier-1.jpg", 
        "https://www.cimis.fr/pub/catalogue/images/.clavier_extra_plat_m.jpg", 
        "https://microcable.fr/3605-large_default/clavier-etendu-mecanique-azerty-104-touches.jpg"
     ],

    "sizes" => ["Small", "Medium", "Large"],

    "reviews" => [
        [
            "author" => "Bruce",
            "rating" => 5,
            "comment" => "perfect" 
        ],
        [
            "author" => "Lee",
            "rating" => 4,
            "comment" => "good" 
        ],

    ],
];
 // nombre de taille 
echo "Nombre de taille disponible : " . count($product["sizes"]);

echo "<br>";

// la note du premier avis
echo "FeedBack : " . $product["reviews"][0]["rating"] . "/5"; 

?>

<div>
    // Afficher la deuxième image 
    <img src="<?php echo $product ["images"][1] ?>" alt="">
</div>