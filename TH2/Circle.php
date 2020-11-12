<?php


class Circle
{
    public $name;
    public $radio;

    public function __construct($name, $radio)
    {
        $this->name = $name;
        $this->radio = $radio;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radio;
    }



    /**
     * @param mixed $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }
}