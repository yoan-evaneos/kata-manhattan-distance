<?php

namespace Kata;

/**
 * Class Point
 *
 * @package Kata\Test
 **/
class Point
{

    /** @var Abscissa $x */
    private $x;

    /** @var Ordinate $y */
    private $y;

    /**
     * Point constructor.
     *
     * @param Abscissa $x
     * @param Ordinate $y
     */
    public function __construct(Abscissa $x, Ordinate $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function distanceFromPoint(Point $point): Distance
    {
        return  abs($point->x - $this->x) + abs($point->y - $this->y);
    }
}
