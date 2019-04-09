<?php

class Truck
{

    private $brand;
    private $model;
    private $weight;

    /**
     * Truck constructor.
     * @param $brand
     * @param $model
     * @param $weight
     */
    public function __construct($brand, $model, $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }


}

class Car
{
    private $brand;
    private $model;
    private $horsePower;

    /**
     * Car constructor.
     * @param $brand
     * @param $model
     * @param $horsePower
     */
    public function __construct($brand, $model, $horsePower)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getHorsePower()
    {
        return $this->horsePower;
    }

}

class Catalog
{

    private $cars = [];
    private $trucks = [];

    /**
     * Catalog constructor.
     * @param array $cars
     * @param array $trucks
     */
    public function __construct(array $cars, array $trucks)
    {
        $this->cars = $cars;
        $this->trucks = $trucks;
    }

    /**
     * @return array
     */
    public function getCars(): array
    {
        return $this->cars;
    }

    /**
     * @return array
     */
    public function getTrucks(): array
    {
        return $this->trucks;
    }


}

$cars = [];
$trucks = [];
while (true) {

    $cmd = readline();
    if ($cmd === 'end') {
        break;
    }
    list($type, $brand, $model, $horsePowerOrWeight) = explode('/', $cmd);
    if ($type === 'Car') {
        $car = new Car($brand, $model, $horsePowerOrWeight);
        $cars [] = $car;
    } elseif ($type === 'Truck') {
        $truck = new Truck($brand, $model, $horsePowerOrWeight);
        $trucks [] = $truck;
    }

}
usort($cars, function (Car $a, Car $b){
    return $a->getBrand()>$b->getBrand();
});
usort($trucks, function (Truck $a, Truck $b){
    return $a->getBrand()>$b->getBrand();
});
$catalog = new Catalog($cars, $trucks);

if (count($cars) > 0) {
    echo "Cars:" . PHP_EOL;
    foreach ($cars as $value) {
        echo "{$value->getBrand()}: {$value->getmodel()} - {$value->getHorsePower()}hp" . PHP_EOL;
    }
}

if (count($trucks) > 0) {
    echo "Trucks:" . PHP_EOL;
    foreach ($trucks as $value) {
        echo " {$value->getBrand()}: {$value->getmodel()} - {$value->getWeight()}kg" . PHP_EOL;
    }
}

