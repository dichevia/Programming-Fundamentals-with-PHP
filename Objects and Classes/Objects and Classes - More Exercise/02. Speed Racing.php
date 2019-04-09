<?php

class Car
{
    private $model;
    private $fuelAmount;
    private $fuelConsumptionFor1km;
    private $traveledDistance=0;

    /**
     * Car constructor.
     * @param $model
     * @param $fuelAmount
     * @param $fuelConsumptionFor1km
     */
    public function __construct($model, $fuelAmount, $fuelConsumptionFor1km)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelConsumptionFor1km = $fuelConsumptionFor1km;
    }
    public function MoveCar($distance){
        $requiredFuel =$this->fuelConsumptionFor1km*$distance;
        if ($requiredFuel<=$this->fuelAmount){
            $this->fuelAmount-=$requiredFuel;
            $this->fuelAmount=number_format($this->fuelAmount, 2, '.','');
            $this->traveledDistance+=$distance;
        }else{
            echo 'Insufficient fuel for the drive'.PHP_EOL;
        }
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
    public function getFuelAmount()
    {
        return $this->fuelAmount;
    }

    /**
     * @return int
     */
    public function getTraveledDistance(): int
    {
        return $this->traveledDistance;
    }
}

$n = intval(readline());
$cars = [];

for ($i = 0; $i <$n ; $i++){
    $input = readline();
    list($model, $fuelAmount, $fuelConsumption)=explode(' ', $input);
    $car = new Car ($model, $fuelAmount, $fuelConsumption);
    $cars[]=$car;
}

while (true){
    $input=readline();
    if ($input=='End'){
        break;
    }
    list($drive, $carModel, $amountOfkm) = explode(' ', $input);
    if ($drive = 'Drive'){
        foreach ($cars as $car){
            if ($carModel == $car->getModel()){
                $car->MoveCar($amountOfkm);
            }
        }
    }
}

foreach ($cars as $car){
    printf("%s %.2f %d\n", $car->getModel(),$car->getFuelAmount(), $car->getTraveledDistance());
}