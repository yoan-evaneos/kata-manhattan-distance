<?php

namespace Kata\Test;

use Kata\Abscissa;
use Kata\Distance;
use Kata\Ordinate;
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
                new Point(new Abscissa(-4), new Ordinate(-4)),
                new Point(new Abscissa(2), new Ordinate(2)),
                new Distance(12),
            ],
            'Distance between (0,0) and (-2,-2) must be 4' => [
                new Point(new Abscissa(0), new Ordinate(0)),
                new Point(new Abscissa(-2), new Ordinate(-2)),
                new Distance(4),
            ],
            'Distance between (1,1) and (-2, -2) must be 6' => [
                new Point(new Abscissa(1), new Ordinate(1)),
                new Point(new Abscissa(-2), new Ordinate(-2)),
                new Distance(6),
            ],
        ];
    }

    public function getEuclideanCalculationExamples(): array
    {
        return [
            'Euclidean Distance between (0, 0) and (2,2) must be 2.828' => [
                new Point(new Abscissa(0), new Ordinate(0)),
                new Point(new Abscissa(2), new Ordinate(2)),
                new Distance(2.828),
            ],
            'Euclidean Distance between (1, 4) and (5,2) must be 4.472' => [
                new Point(new Abscissa(1), new Ordinate(4)),
                new Point(new Abscissa(5), new Ordinate(2)),
                new Distance(4.472),
            ],
        ];

    }

    /**
     * @dataProvider getCalculationExamples
     * @test
     *
     * @param Point    $start
     * @param Point    $end
     * @param Distance $expectedDistance
     */
    public function it_returns_the_distance_from_another_point(Point $start, Point $end, Distance $expectedDistance)
    {
        $this->assertEquals($expectedDistance, $start->distanceFromPoint($end));
    }

    /**
     * @dataProvider getEuclideanCalculationExamples
     * @test
     *
     * @param Point $start
     * @param Point $end
     * @param Distance $expectedDistance
     */
    public function it_returns_the_euclidean_distance_from_another_point(Point $start, Point $end, Distance $expectedDistance)
    {
        $this->assertEquals($expectedDistance, $start->euclideanDistanceFromPoint($end));
    }
}
