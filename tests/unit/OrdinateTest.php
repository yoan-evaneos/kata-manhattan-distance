<?php

namespace Kata\Test;

use Kata\Distance;
use Kata\Ordinate;
use PHPUnit\Framework\TestCase;

/**
 * Class OrdinateTest
 *
 * @package Kata\Test
 **/
class OrdinateTest extends TestCase
{

    public function getCalculationExamples(): array
    {
        return [
            'Distance 4 and -4 must be 8' => [
                new Ordinate(4),
                new Ordinate(-4),
                new Distance(8),
            ],
            'Distance between 0 and -2 must be 2' => [
                new Ordinate(0),
                new Ordinate(-2),
                new Distance(2),
            ],
        ];
    }

    /**
     * @dataProvider getCalculationExamples
     * @test
     *
     * @param Ordinate $Ordinate
     * @param Ordinate $abs
     * @param Distance $expectedDistance
     */
    public function it_returns_the_distance_from_another_ordinate(
        Ordinate $Ordinate,
        Ordinate $abs,
        Distance $expectedDistance
    ) {
        $this->assertEquals($expectedDistance, $Ordinate->distanceFromOrdinate($abs));
    }
}
