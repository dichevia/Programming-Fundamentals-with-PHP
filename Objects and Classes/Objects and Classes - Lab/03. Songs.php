<?php

class Song
{
    private $typeList;
    private $name;
    private $time;

    /**
     * Song constructor.
     * @param $typeList
     * @param $name
     * @param $time
     */
    public function __construct($typeList, $name, $time)
    {
        $this->typeList = $typeList;
        $this->name = $name;
        $this->time = $time;
    }

    public function getTypeList()
    {
        return $this->typeList;
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
    public function getTime()
    {
        return $this->time;
    }


}

$n = intval(readline());
$arrOfSongs = [];
for ($i = 0; $i < $n; $i++) {
    $line = readline();
    list($typeList, $name, $time) = explode('_', $line);
    $song = new Song($typeList, $name, $time);
    $arrOfSongs[] = $song;
}

$typeList = readline();

if ($typeList === 'all') {
    foreach ($arrOfSongs as $value) {
        echo $value->getName() . PHP_EOL;
    }
} else {
    foreach ($arrOfSongs as $value) {
        if ($value->getTypeList() == $typeList) {
            echo $value->getName() . PHP_EOL;
        }
    }
}
