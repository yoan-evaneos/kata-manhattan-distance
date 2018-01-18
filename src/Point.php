<?php

namespace Kata;

/**
 * Class Point
 *
 * @package Kata\Test
 **/
class Point
{

    /** @var int $x */
    private $x;

    /** @var int $y */
    private $y;

    /**
     * Point constructor.
     *
     * @param int $x
     * @param int $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function distanceFromPoint(Point $point):int
    {
        return abs($point->x - $this->x) + abs($point->y - $this->y);
    }
}
