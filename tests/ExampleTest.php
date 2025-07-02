<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Greeter;

class GreeterTest extends TestCase
{
    public function testGreetReturnsExpectedString()
    {
        $greeter = new Greeter();
        $this->assertEquals('Hello from src!', $greeter->greet());
    }
}
