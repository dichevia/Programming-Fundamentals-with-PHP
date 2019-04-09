<?php

class Person{
    public $name;
    public $age;

    function __construct(string $name, int $age)
    {
        $this->name=$name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age)
    {
        $this->age = $age;
    }




}

$n = intval(readline());
$members = [];
//$maxage = 0;

for ($i=0; $i<$n; $i++) {
    $input = readline();
    $tokens = explode(" ", $input);
    $person = new Person($tokens[0], intval($tokens[1]));
    $members[] = $person;
//    if($person->age > $maxage) {
////        $maxage = $person->age;
//    }
}

$oldestMember = getOldestMember($members);
echo $oldestMember->getName() . " " . $oldestMember->getAge();

function getOldestMember($members):Person{
    if(count($members)>0){
        $oldestMember = current($members);
        /** @var Person $member */
        foreach ($members as $member){
            if($oldestMember->getAge()<$member->getAge()){
                $oldestMember = $member;
            }
        }
        return $oldestMember;
    }
}