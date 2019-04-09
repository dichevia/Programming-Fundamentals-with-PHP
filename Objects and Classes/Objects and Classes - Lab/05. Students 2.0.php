<?php

class Student2
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
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed $hometown
     */
    public function setHometown($hometown): void
    {
        $this->hometown = $hometown;
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

function isStudentExist($studentData, $name, $lastName)
{
    foreach ($studentData as $student) {
        if ($student->getFirstName() == $name && $student->getLastName() == $lastName) {
            return true;
        }
    }
    return false;
}

$students = [];
while (true) {
    $cmd = readline();
    if ($cmd === 'end') {
        break;
    }
    list ($fName, $lName, $age, $hTown) = (explode(' ', $cmd));
    if (isStudentExist($students, $fName, $lName)){
        foreach ($students as $value){
            if ($value-> getFirstName() == $fName && $value->getLastName()==$lName){
                $value->setAge($age);
                $value->setHometown($hTown);
                break;
            }
        }
    }else {
        $student = new Student2($fName, $lName, $age, $hTown);
        $students[] = $student;
    }

}
$resultHometown = readline();
foreach ($students as $value) {
    if ($value->getHometown() == $resultHometown) {
        echo "{$value->getFirstName()} {$value->getLastName()} is {$value->getAge()} years old." . PHP_EOL;
    }
}


