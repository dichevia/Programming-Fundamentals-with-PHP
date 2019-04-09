<?php

class Student02
{
    private $name;
    private $listOfGrades=[];
    private $averageGrade;

    /**
     * Student02 constructor.
     * @param $name
     * @param $listOfGrades
     * @param $averageGrade
     */
    public function __construct($name, $listOfGrades, $averageGrade)
    {
        $this->name = $name;
        $this->listOfGrades = $listOfGrades;
        $this->averageGrade = $averageGrade;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getListOfGrades(): array
    {
        return $this->listOfGrades;
    }

    /**
     * @return mixed
     */
    public function getAverageGrade()
    {
        return $this->averageGrade;
    }



}
$n = intval(readline());

$students = [];

for ($i = 0; $i <$n ; $i++){
    $input = explode(' ', readline());
    $averageGrades = [];
    foreach ($input as $j=>$value){
        if ($j!==0){
            $averageGrades [] = $value;
        }else{
            $name = $value;
        }
    }
    $student = new Student02($name, $averageGrades, array_sum($averageGrades)/count($averageGrades));
    $students[] = $student;
}

usort($students, function (Student02$a, Student02$b){
    if (strtolower($a->getName())==strtolower($b->getName())){
        return $a->getAverageGrade()<$b->getAverageGrade();
    }
    return strtolower($a->getName())>strtolower($b->getName());
});


foreach ($students as $value){
    if ($value->getAveragegrade()>=5){
        echo $value->getName() ." -> ". number_format($value->getAverageGrade(),2).PHP_EOL;
    }
}