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

    public function getCalculationExamples(): array
    {
        return [
            'Distance between (0,0) and (1,1) must be 2' => [
                new Point(0, 0),
                new Point(1, 1),
                2,
            ],
            'Distance between (0,0) and (3,3) must be 6' => [
                new Point(0, 0),
                new Point(3, 3),
                6,
            ],
        ];
    }

    /**
     * @dataProvider getCalculationExamples
     * @test
     *
     * @param Point $start
     * @param Point $end
     * @param int $expectedDistance
     */
    public function it_calculates_the_distance(Point $start, Point $end, int $expectedDistance)
    {
        $sut = new ManhattanDistanceCalculator($start, $end);

        $distance = $sut->calculate();

        $this->assertEquals($expectedDistance, $distance);
    }
}
