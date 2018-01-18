<?php

namespace Kata\Test;

use Kata\ManhattanDistanceCalculator;
use Kata\Point;
use PHPUnit\Framework\TestCase;

/**
 * Class ManhattanDistanceCalculatorTest
 *
 * @package Kata\Test
 **/
class ManhattanDistanceCalculatorTest extends TestCase
{

    /**
     * @test
     */
    public function it_calculates_the_distance()
    {
        $a = new Point(0, 0);
        $b = new Point(1, 1);
        $sut = new ManhattanDistanceCalculator($a, $b);

        $distance = $sut->calculate();

        $this->assertEquals(2, $distance);
    }
}
