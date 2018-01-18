<?php

namespace Kata\Test;

use Kata\Point;
use PHPUnit\Framework\TestCase;

/**
 * Class PointTest
 *
 * @group point
 *
 * @package Kata\Test
 **/
class PointTest extends TestCase
{
    public function getCalculationExamples(): array
    {
        return [
            'Distance between (-4, -4) and (2,2) must be 12' => [
                new Point(-4, -4),
                new Point(2, 2),
                12,
            ],
            'Distance between (0,0) and (-2,-2) must be 4' => [
                new Point(0, 0),
                new Point(-2, -2),
                4,
            ],
            'Distance between (1,1) and (-2, -2) must be 6' => [
                new Point(1, 1),
                new Point(-2, -2),
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
    public function it_returns_the_distance_from_another_point(Point $start, Point $end, int $expectedDistance)
    {
        $this->assertEquals($expectedDistance, $start->distanceFromPoint($end));
    }
}
