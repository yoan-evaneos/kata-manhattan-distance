<?php

namespace Kata;

/**
 * Class Point
 *
 * @package Kata\Test
 **/
class Point
{
    private $x;
    private $y;

    /**
     * Point constructor.
     *
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
