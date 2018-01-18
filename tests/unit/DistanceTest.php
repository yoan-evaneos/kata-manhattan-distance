<?php

namespace Kata\Test;

use Kata\Distance;
use Money\Currency;
use Money\Money;
use PHPUnit\Framework\TestCase;

/**
 * Class DistanceTest
 *
 * @package Kata\Test
 **/
class DistanceTest extends TestCase
{

    public function getPriceCalculationExamples()
    {
        return [
            'Price for 1 Kms must be 1.5 EUR' => [
                new Distance(1),
                new Money(150, new Currency('EUR')),
            ],
            'Price for 5 Kms must be 7.5 EUR' => [
                new Distance(5),
                new Money(750, new Currency('EUR')),
            ],
            'Price for 12 Kms must be 16.6 EUR' => [
                new Distance(12),
                new Money(1660, new Currency('EUR')),
            ],
            'Price for 20 Kms must be 21.5 EUR' => [
                new Distance(20),
                new Money(2150, new Currency('EUR')),
            ],
            'Price for 25 Kms must be 21.5 EUR' => [
                new Distance(25),
                new Money(2400, new Currency('EUR')),
            ],
        ];
    }

    /**
     * @dataProvider getPriceCalculationExamples
     * @test
     *
     * @param Distance $distance
     * @param Money $expectedMoney
     */
    public function it_returns_amount_for_a_distance(Distance $distance, Money $expectedMoney)
    {
        $this->assertEquals($expectedMoney, $distance->calculatePrice());
    }

    /**
     * @test
     */
    public function it_throws_exception_for_invalid_argument()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Distance(-2);
    }
}
