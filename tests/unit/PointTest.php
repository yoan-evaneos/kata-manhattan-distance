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

    /**
     * @test
     */
    public function it_returns_the_distance_from_origin()
    {
        $point = new Point(2,2);
        
        $this->assertEquals(4, $point->distanceFromOrigin());
    }
}
