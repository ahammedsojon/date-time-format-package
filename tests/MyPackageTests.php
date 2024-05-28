<?php

use PHPUnit\Framework\TestCase;
use Ahammedsojon\DateTimeFormat\DateTimeFormat;

class DateTimeFormatTest extends TestCase {
    public function testHelloWorld() {
        $package = new DateTimeFormat();
        $this->assertEquals('Hello, World!', $package->helloWorld());
    }
}
