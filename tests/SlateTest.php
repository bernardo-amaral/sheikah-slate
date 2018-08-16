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
}
