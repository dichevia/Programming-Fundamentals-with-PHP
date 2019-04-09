<?php

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    /**
     * Person constructor.
     * @param $firstName
     * @param $lastName
     * @param $age
     */
    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}

$person1 = new Person(readline(), readline(), readline());

echo "firstName: {$person1->getFirstName()}".PHP_EOL;
echo "lastName: {$person1->getLastName()}".PHP_EOL;
echo "age: {$person1->getAge()}".PHP_EOL;

