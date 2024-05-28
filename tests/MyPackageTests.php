<?php

use PHPUnit\Framework\TestCase;
use ExampleVendor\DateTimeFormat\DateTimeFormat;

class DateTimeFormat extends TestCase {
    public function testHelloWorld() {
        $package = new MyPackage();
        $this->assertEquals('Hello, World!', $package->helloWorld());
    }
}
