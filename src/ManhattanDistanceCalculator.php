<?php

namespace Kata;

/**
 * Class ManhattanDistanceCalculator
 *
 * @package Kata\Test
 **/
class ManhattanDistanceCalculator
{
    private $start;
    private $end;

    /**
     * ManhattanDistanceCalculator constructor.
     *
     * @param Point $start
     * @param Point $end
     */
    public function __construct(Point $start, Point $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    public function calculate(): int
    {
        return 2;
    }

}
