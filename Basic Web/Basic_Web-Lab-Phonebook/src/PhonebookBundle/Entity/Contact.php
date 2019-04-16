<?php
/**
 * Created by PhpStorm.
 * User: Dimitar Dichev
 * Date: 29.3.2019 г.
 * Time: 13:36
 */

namespace PhonebookBundle\Entity;


class Contact
{
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $number;

}