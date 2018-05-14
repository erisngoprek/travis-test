<?php

namespace Eristemena\tests;

use PHPUnit\Framework\TestCase;
use Eristemena\Traviso;

class TravisoTest extends TestCase
{
    public function testConstructor()
    {
        $this->assertInstanceOf(Traviso::class, new Traviso());
    }

    public function testAdd()
    {
        $traviso = new Traviso();

        $this->assertEquals(2, $traviso->add(1, 1));
    }

    public function testSubstract()
    {
        $traviso = new Traviso();

        $this->assertEquals(2, $traviso->substract(3, 1));
    }

    public function testEven()
    {
        $traviso = new Traviso();

        $this->assertTrue($traviso->isEven(6));
    }
}