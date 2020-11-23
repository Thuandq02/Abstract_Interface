<?php
include "Cricle.php";
include "Comparable.php";

class ComparableCircle extends Cricle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();

        if ($this->getRadius() > $circleOtherRadius) {
            return 1;
        } elseif ($this->getRadius() < $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }

    public function compare($objOther)
    {
        // TODO: Implement compare() method.
    }
}