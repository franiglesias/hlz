<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testShouldShoutHelloWorld()
    {
        $text = 'Hello World!';

        $this->assertEquals('Hello World!', $text);
    }
}
