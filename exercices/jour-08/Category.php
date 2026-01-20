<?php

class Category
{
    public string $id;
    public string $name;
    public string $description;

    public function __construct(string $id, string $name, string $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function getSlug(): string
    {
        return strtolower(str_replace(" ", "-", $this->id . " " .$this->name . " " . $this->description));
    }
}

$cat1 = new Category ("1", "Informatique", "PHP !");
$cat2 = new Category ("1", "Bonjour je suis", "Perdu putain !");
$cat3 = new Category('3', 'Sport', 'Catégorie sport');

echo $cat1->getSlug() . "<br>";
echo $cat2->getSlug() . "<br>";
echo $cat3->getSlug() . "<br>";

?>