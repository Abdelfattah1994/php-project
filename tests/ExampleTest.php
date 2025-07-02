<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    public function testSum()
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testStringContains()
    {
        $this->assertStringContainsString('Hello', 'Hello World');
    }
}
