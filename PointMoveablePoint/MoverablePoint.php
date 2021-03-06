<?php


include_once "Point.php";

class MoverablePoint extends Point
{
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }


    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function toString()
    {
        return "($this->x, $this->y), speed=($this->xSpeed, $this->ySpeed))";
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }

}
