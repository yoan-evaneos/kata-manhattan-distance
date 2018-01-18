<?php

namespace Kata;

/**
 * Class Distance
 *
 * @package Kata
 **/
class Distance
{
    /**
     * @var int
     */
    private $distance;

    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public function add(Distance $dist): Distance
    {
        return new Distance($this->distance + $dist->distance);
    }
}
