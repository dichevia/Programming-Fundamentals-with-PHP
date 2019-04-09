<?php

class People
{
    private $name;
    private $id;
    private $age;

    /**
     * People constructor.
     * @param $name
     * @param $id
     * @param $age
     */
    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}

$people = [];
while (true) {
    $input = readline();
    if ($input === 'End') {
        break;
    }
    list ($name, $id, $age) = explode(' ', $input);
    $person = new People($name, $id, $age);
    $people[] = $person;
}

usort($people, function (People $a,People $b) {
    return ($a->getAge() > $b->getAge());

});

foreach ($people as $value) {
    echo "{$value->getName()} with ID: {$value->getId()} is {$value->getAge()} years old." . PHP_EOL;
}