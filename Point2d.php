<?php


class Point2d
{
    public $x;
    public $y;
    public $arrayXY= [];

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

    }

    function getX()
    {
        return $this->x;
    }

    function getY()
    {
        return $this->y;
    }

    function setX($x)
    {
        $this->x = $x;
    }

    function setY($y)
    {
        $this->y = $y;
    }

    function setXY($x, $y)
    {
     array_push($this->arrayXY,$x,$y);
    }
    function getXY() {
             return $this->arrayXY[0]. "," .$this->arrayXY[1] ;
    }
    function toString() {
        echo "toa do 2d : " . $this->getXY();
    }
}