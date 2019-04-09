<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $hometown;

    /**
     * Student constructor.
     * @param $firstName
     * @param $lastName
     * @param $age
     * @param $hometown
     */
    public function __construct($firstName, $lastName, $age, $hometown)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->hometown = $hometown;
    }

    public function getFirstName(){
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

    /**
     * @return mixed
     */
    public function getHometown()
    {
        return $this->hometown;
    }
}
$students = [];
while (true){
    $cmd = readline();
    if ($cmd === 'end'){
        break;
    }
    list ($fName, $lName, $age, $hTown) = (explode(' ', $cmd));
    $student = new Student($fName, $lName, $age, $hTown);
    $students[]=$student;
}
$resultHometown = readline();
foreach ($students as $value){
    if ($value->getHometown()==$resultHometown){
        echo "{$value->getFirstName()} {$value->getLastName()} is {$value->getAge()} years old.".PHP_EOL;
    }
}