<?php

namespace Kata;

use Money\Currency;
use Money\Money;
use Webmozart\Assert\Assert;

/**
 * Class Distance
 *
 * @package Kata
 **/
class Distance
{
    // Price in cents
    private const PRICE_PER_DISTANCE_LOWER_THAN_10 = 150;
    private const PRICE_PER_DISTANCE_BETWEEN_10_AND_15 = 80;
    private const PRICE_PER_DISTANCE_GREATER_THAN_15 = 50;

    /**
     * @var int
     */
    private $distance;

    public function __construct(int $distance)
    {
        Assert::greaterThanEq($distance, 0);
        $this->distance = $distance;
    }

    /**
     * @param Distance $dist
     *
     * @return Distance
     */
    public function add(Distance $dist): Distance
    {
        return new Distance($this->distance + $dist->distance);
    }

    public function calculatePrice(): Money
    {
        $money = new Money(0, new Currency('EUR'));
        for ($i = 1; $i <= $this->distance; $i++) {
            $money = $money->add($this->getRate($i));
        }

        return $money;
    }

    private function getRate(int $currentDistance): Money
    {
        if ($currentDistance <= 10) {
            return new Money(self::PRICE_PER_DISTANCE_LOWER_THAN_10, new Currency('EUR'));
        }

        if ($currentDistance <= 15) {
            return new Money(self::PRICE_PER_DISTANCE_BETWEEN_10_AND_15, new Currency('EUR'));
        }

        return new Money(self::PRICE_PER_DISTANCE_GREATER_THAN_15, new Currency('EUR'));
    }
}
