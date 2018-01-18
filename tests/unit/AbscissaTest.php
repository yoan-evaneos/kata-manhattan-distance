<?php
/**
 * Created by PhpStorm.
 * User: yoanhaouzi
 * Date: 18/01/2018
 * Time: 15:54
 */

namespace Kata\Test;

use Kata\Abscissa;
use Kata\Distance;
use PHPUnit\Framework\TestCase;

class AbscissaTest extends TestCase
{
    public function getCalculationExamples(): array
    {
        return [
            'Distance 4 and -4 must be 8' => [
                new Abscissa(4),
                new Abscissa(-4),
                new Distance(8),
            ],
            'Distance between 0 and -2 must be 2' => [
                new Abscissa(0),
                new Abscissa(-2),
                new Distance(2),
            ],
        ];
    }

    /**
     * @dataProvider getCalculationExamples
     * @test
     *
     * @param Abscissa $abscissa
     * @param Abscissa $abs
     * @param Distance $expectedDistance
     */
    public function it_returns_the_distance_from_another_abscissa(
        Abscissa $abscissa,
        Abscissa $abs,
        Distance $expectedDistance
    ) {
        $this->assertEquals($expectedDistance, $abscissa->distanceFromAbscissa($abs));
    }
}
