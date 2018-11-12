<?php

namespace bernardoamaral\sheikah\Tests;

use PHPUnit\Framework\TestCase;
use bernardoamaral\sheikah\Slate as Slate;

class SlateTest extends TestCase
{

    public function testConstructorMethod()
    {
        $slate = new Slate();
        $this->assertInstanceOf(Slate::class, $slate);
    }

    public function testOrderListMethod()
    {
        $resultAssert = ['Blue', 'Charlie', 'Delta', 'Echo'];

        $slate = new Slate();
        $result = $slate->order(['Delta', 'Blue', 'Echo', 'Charlie']);
        $this->assertEquals($result, $resultAssert);
    }

    public function testSumValuesMethod()
    {
        $slate = new Slate();
        $sumTotal1 = $slate->sumValues(2, 2);
        $sumTotal2 = $slate->sumValues(1, 7);
        $sumTotal3 = $slate->sumValues(14, 13);
        $this->assertEquals($sumTotal1, 4);
        $this->assertEquals($sumTotal2, 8);
        $this->assertEquals($sumTotal3, 27);
    }

    public function testSubtractionValuesMethod()
    {
        $slate = new Slate();
        $sumTotal1 = $slate->subtractValues(2, 2);
        $sumTotal2 = $slate->subtractValues(7, 1);
        $sumTotal3 = $slate->subtractValues(21, 13, 7);
        $sumTotal4 = $slate->subtractValues(2, 5, 4);
        $this->assertEquals($sumTotal1, 0);
        $this->assertEquals($sumTotal2, 6);
        $this->assertEquals($sumTotal3, 1);
        $this->assertEquals($sumTotal4, -7);
    }
}
