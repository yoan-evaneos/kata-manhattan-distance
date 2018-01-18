<?php

namespace Kata;

/**
 * Class Ordinate
 *
 * @package Kata
 **/
class Ordinate
{
    /**
     * @var int
     */
    private $ordinate;

    /**
     * Ordinate constructor.
     *
     * @param int $ordinate
     *
     */
    public function __construct(int $ordinate)
    {
        $this->ordinate = $ordinate;
    }

    /**
     * @param Ordinate $ordinate
     *
     * @return Distance
     */
    public function distanceFromOrdinate(Ordinate $ordinate): Distance
    {
        return new Distance(abs($ordinate->ordinate - $this->ordinate));
    }
}
