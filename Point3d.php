<?php


class Point3d extends Point2d
{
    public $z;

    function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    function setZ($z)
    {
        $this->z = $z;
    }

    function getZ()
    {
        return $this->z;
    }
    function setXYZ($x, $y, $z)
    {
        parent::setXY($x, $y);
        array_push($this->arrayXY,$z);
    }
    function getXYZ()
    {
        return parent::getXY().",".$this->arrayXY[2];
    }
    function toString()
    {
        echo "toa do 3d : " . $this->getXYZ();

    }
}