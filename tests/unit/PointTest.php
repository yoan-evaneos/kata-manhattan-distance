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
            'Distance of (2,2) must be 4' => [
                new Point(2, 2),
                4,
            ],
            'Distance of (-2,-2) must be 4' => [
                new Point(-2, -2),
                4,
            ],
            'Distance of (-1,3) must be 4' => [
                new Point(-2, -2),
                4,
            ],
        ];
    }

    /**
     * @dataProvider getCalculationExamples
     * @test
     *
     * @param $point
     * @param $expectedDistance
     */
    public function it_returns_the_distance_from_origin(Point $point, int $expectedDistance)
    {
        $this->assertEquals($expectedDistance, $point->distanceFromOrigin());
    }
}
