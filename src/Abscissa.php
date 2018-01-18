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

    public function distanceFromAbscissa($x) : Distance
    {
    }
}
