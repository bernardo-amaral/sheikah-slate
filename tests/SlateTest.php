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

}
