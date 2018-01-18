<?php

namespace Kata;

/**
 * Class Point
 *
 * @package Kata\Test
 **/
class Point
{
    private const ORIGIN_X = 0;
    private const ORIGIN_Y = 0;

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

    /**
     * @return int
     */
    public function distanceFromOrigin(): int
    {
        return abs($this->x - self::ORIGIN_X) + abs($this->y - self::ORIGIN_Y);
    }
}
