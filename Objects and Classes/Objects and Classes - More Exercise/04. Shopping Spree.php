<?php

class Person
{
    private $name;
    private $money;
    private $bagOfProducts=[];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Person constructor.
     * @param $name
     * @param $money
     */
    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money): void
    {
        $this->money = $money;
    }

    /**
     * @param mixed $bagOfProducts
     */
    public function setBagOfProducts($bagOfProducts): void
    {
        $this->bagOfProducts [] = $bagOfProducts;
    }

    /**
     * @return mixed
     */
    public function getBagOfProducts()
    {
        return $this->bagOfProducts;
    }


}

class Product
{
    private $name;
    private $cost;

    /**
     * Product constructor.
     * @param $name
     * @param $cost
     */
    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

}

function BuyProduct(Person $person, Product $product)
{
    if ($person->getMoney() >= $product->getCost()) {
        $moneyAfterBuy = $person->getMoney() - $product->getCost();
        $person->setMoney($moneyAfterBuy);
        $person->setBagOfProducts($product->getName());
        echo "{$person->getName()} bought {$product->getName()}".PHP_EOL;
    } else {
        echo "{$person->getName()} can't afford {$product->getName()}".PHP_EOL;
    }

}

$people = explode(';', readline());
$products = explode(';', readline());
$peopleArr = [];
$productsArr = [];

for ($i = 0; $i < count($people); $i++) {
    list($name, $money) = explode('=', $people[$i]);
    $person = new Person($name, $money);
    $peopleArr[] = $person;
}

for ($i = 0; $i < count($products); $i++) {
    list($nameProduct, $cost) = explode('=', $products[$i]);
    $product = new Product($nameProduct, $cost);
    $productsArr[] = $product;
}

while (true) {
    $input = readline();
    if ($input == 'END') {
        break;
    }
    list($buyer, $productToBuy) = explode(' ', $input);
    $productExist = false;

    foreach ($productsArr as $product) {
        if ($product->getName() == $productToBuy) {
            $productExist = true;
            break;
        }
    }
    if ($productExist) {
        foreach ($peopleArr as $person) {
            if ($person->getName() == $buyer) {
                BuyProduct($person, $product);
            }
        }
    }
}

foreach ($peopleArr as $person){
    if (count ($person->getBagOfProducts()) != 0){
        echo $person->getName().' - '.implode (', ', $person->getBagOfProducts()).PHP_EOL;
    }else {
        echo $person->getName().' - '."Nothing bought".PHP_EOL;
    }
}