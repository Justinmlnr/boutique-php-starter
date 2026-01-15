<?php

class Car
{
    public string $brand;
    public string $model;
    public int $year;

    public function __construct(string $brand, string $model, int $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function display(): void
    {

        echo "{$this->brand} {$this->model} ({$this->year})\n";
    }
}



$car1 = new Car("Toyota", "Corolla", 2015);
// $car1->brand = "Nissan";
// $car1->model = "Corolla";
// $car1->year = 2015;

// $car2 = new Car();
// $car2->brand = "Peugeot";
// $car2->model = "208";
// $car2->year = 2018;

// $car3 = new Car();
// $car3->brand = "Renault";
// $car3->model = "Clio";
// $car3->year = 2020;

$car1->display();
$car2->display();
$car3->display();
