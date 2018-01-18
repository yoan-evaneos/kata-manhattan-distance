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
}
