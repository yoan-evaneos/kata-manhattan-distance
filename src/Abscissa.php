<?php

namespace Kata;

/**
 * Class Abscissa
 *
 * @package Kata
 **/
class Abscissa
{
    /**
     * @var int
     */
    private $abscissa;

    /**
     * Abscissa constructor.
     *
     * @param int $abscissa
     */
    public function __construct(int $abscissa)
    {
        $this->abscissa = $abscissa;
    }

    /**
     * @param Abscissa $x
     *
     * @return Distance
     */
    public function distanceFromAbscissa(Abscissa $x) : Distance
    {
        return new Distance(abs($x->abscissa - $this->abscissa));
    }
}
