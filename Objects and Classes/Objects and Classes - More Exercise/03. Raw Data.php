<?php

class Car
{
    private $model;
    private $engine;
    private $cargo;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $cargo
     */
    public function __construct($model, $engine, $cargo)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
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
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

}

class Engine
{
    private $power;
    private $speed;

    /**
     * Engine constructor.
     * @param $power
     * @param $speed
     */
    public function __construct($power, $speed)
    {
        $this->power = $power;
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }
}

class Cargo
{
    private $type;
    private $weight;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Cargo constructor.
     * @param $type
     * @param $weight
     */
    public function __construct($type, $weight)
    {
        $this->type = $type;
        $this->weight = $weight;
    }

}

$n = intval(readline());
$cars = [];

for ($i = 0; $i < $n; $i++) {
    list($model, $engineSpeed, $enginePower, $cargoWeight, $cargoType) = explode(' ', readline());
    $engine = new Engine($enginePower, $engineSpeed);
    $cargo = new Cargo($cargoType, $cargoWeight);
    $car = new Car ($model, $engine, $cargo);
    $cars [] = $car;
}

$command = readline();

if ($command = 'fragile') {
    foreach ($cars as $car) {
        if ($car->getCargo()->getType() == 'fragile') {
            if ($car->getCargo()->getWeight() < 1000) {
                echo $car->getModel().PHP_EOL;
            }
        }
    }
}
if ($command = 'flamable') {
    foreach ($cars as $car) {
        if ($car->getCargo()->getType() == 'flamable') {
            if ($car->getEngine()->getPower() > 250) {
                echo $car->getModel().PHP_EOL;
            }
        }
    }
}